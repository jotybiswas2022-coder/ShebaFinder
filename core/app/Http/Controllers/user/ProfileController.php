<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class ProfileController extends Controller
{
    // বাংলাদেশের সকল বিভাগ
    private $divisions = [
        'ঢাকা', 'চট্টগ্রাম', 'রাজশাহী', 'খুলনা',
        'বরিশাল', 'সিলেট', 'রংপুর', 'ময়মনসিংহ'
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    // ===============================
    // Profile View
    // ===============================
    public function index()
    {
        $categories = Category::all();

        // profile থাকলে আনবে, না থাকলে null
        $profile = Post::where('user_id', Auth::id())->first();

        return view('frontend.profile.index', compact('profile', 'categories'));
    }

    // ===============================
    // Profile Edit
    // ===============================
    public function edit()
    {
        $categories = Category::all();
        $divisions  = $this->divisions;

        // profile না থাকলে empty object বানাও (null crash fix)
        $profile = Post::where('user_id', Auth::id())->first();

        if (!$profile) {
            $profile = new Post();
        }

        return view('frontend.profile.edit', compact('profile', 'categories', 'divisions'));
    }

    // ===============================
    // Update Profile
    // ===============================
    public function update(Request $request)
    {
        $isAjax = $request->ajax() || $request->wantsJson();

        $validator = Validator::make($request->all(), [
            'title'          => 'required|string|max:255',
            'category_id'    => 'nullable|exists:categories,id', // ✅ optional
            'contact_number' => 'required|string|max:20',
            'division'       => 'required|string|max:100',
            'file'           => 'nullable|mimes:jpeg,png,jpg,gif,webp,mp4|max:20480',
        ]);

        if ($validator->fails()) {
            if ($isAjax) {
                return response()->json([
                    'status'  => false,
                    'message' => $validator->errors()->first(),
                    'errors'  => $validator->errors(),
                ], 422);
            }
            return back()->withErrors($validator)->withInput();
        }

        // profile খুঁজো
        $profile = Post::where('user_id', Auth::id())->first();

        // না থাকলে নতুন create করো
        if (!$profile) {
            $profile = new Post();
            $profile->user_id = Auth::id();
            $profile->status  = 0;
        }

        // File upload
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('posts', 'public');
            $profile->file = $filePath;
        }

        // ❗ category null হলে fallback দাও (DB error fix)
        $categoryId = $request->category_id ?? Category::first()?->id;

        $profile->title          = $request->title;
        $profile->category_id    = $categoryId;
        $profile->contact_number = $request->contact_number;
        $profile->division       = $request->division;

        $profile->save();

        if ($isAjax) {
            return response()->json([
                'status'  => true,
                'message' => 'Profile updated successfully.'
            ]);
        }

        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }
}