<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        
        Admin::Create($formFields);

        Auth::guard('admin')->attempt($request->only('email','password'));

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function login()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}