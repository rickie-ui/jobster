<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.contact');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // validating request
          $formFields = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email:strict,dns'],          
            'message' => 'required'
        ]);

        

     Contact::Create($formFields);

        return redirect()->back()->with('status', 'Message sent successfully!');

    }

    
}
