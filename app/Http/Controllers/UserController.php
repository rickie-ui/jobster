<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    /**
     * Users pages  login and register
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
     * logic for users register a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validating request
          $formFields = $request->validate([
            'full_name' => 'required|max:255',
            'email' => ['required', 'email:strict,dns', Rule::unique('users', 'email')],
            'password' => 'required|min:6',
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // role in db
        $formFields['role'] = 'applicant';
        
        User::Create($formFields);
    
        // Redirect to the login page with a message or any additional information
        return redirect()->route('signin')->with('message', 'Account created! Please log in.');
    }


    /**
     * logic for admin pages
     * Display the specified resource.
     */

    public function signup()
    {
        return view('admin.register');
    }

     /**
     * Show the form for creating a new resource.
     */
    public function signin()
    {
        return view('admin.login');
    }

     /**
     * logic for users register a newly created resource in storage.
     */
    public function create(Request $request)
    {
        // validating request
          $formFields = $request->validate([
            'full_name' => 'required|max:255',
            'email' => ['required', 'email:strict,dns', Rule::unique('users', 'email')],
            'password' => 'required|min:6',
        ]);

        //Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // role in db
        $formFields['role'] = 'admin';
        
        User::Create($formFields);
    
        // Redirect to the login page with a message or any additional information
        return redirect()->route('login')->with('message', 'Account created! Please log in.');
    }



     /**
     * logic for users  to login admin/applicants
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            if ($user->role === 'applicant') {
                return redirect()->route('jobs');
            } elseif ($user->role === 'admin') {
                return redirect()->route('dashboard');
            }
        }

        return back()->with('message', 'Invalid credentials!');

    }



    //  logout logic for both admin/applicant

     public function logout(Request $request)
    {
        if (auth()->check()) {
            $user = auth()->user();

            if ($user && $user->role === 'applicant') {
                Auth::logout();
                return redirect()->route('signin')->with('logout', 'Logout successful!');
            } elseif ($user && $user->role === 'admin') {
                Auth::logout();
                return redirect()->route('login')->with('logout', 'Logout successful!');
            }
        }

    }

}
