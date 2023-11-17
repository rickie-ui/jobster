<?php

namespace App\Http\Controllers\applicants;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.signup');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
        return view('users.signin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validating request
          $formFields = $request->validate([
            'full_name' => 'required|max:255',
            'email' => ['required', 'email:strict,dns', Rule::unique('applicants', 'email')],
            'password' => 'required|min:8'
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);
        
        Applicant::Create($formFields);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('jobs');
    }

     /**
     * Login using existing data in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function login(Request $request)
    {
        $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required'
              ]);

             if (!auth()->attempt($request->only('email','password'))) {
              return back()->with('message', 'Invalid credentials.');
             }

              return redirect()->route('jobs');;
    }
}
