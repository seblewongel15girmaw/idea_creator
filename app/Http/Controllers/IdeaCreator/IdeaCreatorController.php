<?php

namespace App\Http\Controllers\IdeaCreator;

use App\Http\Controllers\Controller;
use App\Models\IdeaCreator;
use Hash;
use Illuminate\Http\Request;

class IdeaCreatorController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile_pic' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:idea_creators',
            'password' => 'required|string|min:8|confirmed',
            'phone_number1' => 'required|string|max:15',
            'phone_number2' => 'nullable|string|max:15',
            'address' => 'required|string|max:255',
            'education_status' => 'required|string',
            'about_me' => 'required|string',
        ]);

        dd($request->all);

        // Handle file upload
        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pics', 'public');
        }

        // Create new Idea Creator
        IdeaCreator::create([
            'profile_pic' => $profilePicPath,
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number1' => $request->phone_number1,
            'phone_number2' => $request->phone_number2,
            'address' => $request->address,
            'education_status' => $request->education_status,
            'about_me' => $request->about_me,
        ]);

        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
