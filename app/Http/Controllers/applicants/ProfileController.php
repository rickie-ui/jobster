<?php

namespace App\Http\Controllers\applicants;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {

        $applicant = Applicant::find($id);
        $profile = Profile::where('applicant_id', $applicant->id)->first();

        return view('users.profile', compact('applicant', 'profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
      {
        $applicant = Applicant::find($id);

        $request->validate([
            'full_name' => ['required'],
            'email' => ['required', 'email'],
            'location' => ['required'],
            'phone' => ['required'],
            'age' => ['required', 'numeric'],
            'gender' => ['required'],
            'about' => ['required'],
            // 'resume' => 'required|mimes:pdf,doc,docx|max:2048',
            // 'avatar' => 'required|image|mimes:jpeg,png,webp|max:1024',
        ]);

        $applicant->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
        ]);

        $profile = $applicant->profile;

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

        $profile->update([
            'location' => $request->location,
            'phone' => $request->phone,
            'age' => $request->age,
            'gender' => $request->gender,
            'about' => $request->about,
        ]);

        return redirect()->back()->with('message', 'Information updated successfully!');
    }
}
