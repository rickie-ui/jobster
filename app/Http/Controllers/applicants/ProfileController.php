<?php

namespace App\Http\Controllers\applicants;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $user = User::find($id);
        $profile = Profile::where('user_id', $user->id)->first();

        return view('users.profile', compact('user', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
      {
         $user = User::find($id);
    

        $request->validate([
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'location' => ['required'],
            'phone' => ['required'],
            'age' => ['required', 'numeric'],
            'gender' => ['required'],
            'about' => ['required'],
        ]);

        $user->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
        ]);

                
                // Retrieve or create the profile associated with the user
            $profile = $user->profile ?? new Profile(['user_id' => $user->id]);

            if ($request->hasFile('resume')) {
                $request->validate([
                    'resume' => 'required|mimes:pdf,doc,docx|max:2048',
                ]);

                $profile->resume = $request->file('resume')->store('resumes', 'public');
            }

            if ($request->hasFile('avatar')) {
                $request->validate([
                    'avatar' => 'required|image|mimes:jpeg,png,webp|max:1024',
                ]);

                $profile->avatar = $request->file('avatar')->store('avatars', 'public');
            }

            $profile->location = $request->location;
            $profile->phone = $request->phone;
            $profile->age = $request->age;
            $profile->gender = $request->gender;
            $profile->about = $request->about;

            // Save the Profile model
            $profile->save();

        

        return redirect()->back()->with('message', 'Information updated successfully!');
    }
}
