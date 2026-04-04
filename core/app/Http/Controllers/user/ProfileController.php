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

        $profile = Post::firstOrCreate(
            ['user_id' => Auth::id()],
            [
                'title'          => Auth::user()->name,
                'division'       => '',
                'category_id'    => Category::first()?->id ?? 1,
                'contact_number' => '',
                'status'         => 0, // pending approval by default
            ]
        );

        return view('frontend.profile.index', compact('profile', 'categories'));
    }

    // ===============================
    // Profile Edit
    // ===============================
    public function edit()
    {
        $categories = Category::all();
        $divisions  = $this->divisions;

        $profile = Post::firstOrCreate(
            ['user_id' => Auth::id()],
            [
                'title'          => Auth::user()->name,
                'division'       => '',
                'category_id'    => Category::first()?->id ?? 1,
                'contact_number' => '',
                'status'         => 0,
            ]
        );

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
            'category_id'    => 'required|exists:categories,id',
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

        // user_id দিয়ে profile খোঁজো, না থাকলে তৈরি করো
        $profile = Post::firstOrCreate(
            ['user_id' => Auth::id()],
            [
                'title'          => Auth::user()->name,
                'division'       => '',
                'category_id'    => Category::first()?->id ?? 1,
                'contact_number' => '',
                'status'         => 0,
            ]
        );

        // File handling
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('posts', 'public');
        } else {
            $filePath = $profile->file;
        }

        $profile->update([
            'title'          => $request->title,
            'category_id'    => $request->category_id,
            'contact_number' => $request->contact_number,
            'division'       => $request->division,
            'file'           => $filePath,
        ]);

        // AJAX request হলে JSON response
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['status' => true, 'message' => 'Profile updated successfully.']);
        }

        return redirect('/profile')->with('success', 'Profile updated successfully.');
    }
}
