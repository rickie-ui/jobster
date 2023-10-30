<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JobOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $jobs = Job::orderBy('created_at', 'desc')->paginate(4);

           $jobs->map(function ($job) {
               $job->created_at = Carbon::parse($job->created_at)->format("d F, Y");
               return $job;
           });

          return view('admin.offers', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.newjob');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // validating request
          $formFields = $request->validate([
            'company' => 'required|max:255',
            'position' => 'required',
            'location' => 'required',
            'period' => 'required',
            'due' => 'required',
            'avatar' => 'required',
            'description' => 'required'
        ]);

        
        if($request->hasFile('avatar')){
            $formFields['avatar'] = $request->file('avatar')->store('avatars','public');
        }

       Job::Create($formFields);

        return redirect()->back()->with('status', 'Job opening posted successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
           
         $result = Job::get()->first(); 

         $job= $result->findOrFail($id);
           

        //  days left for job
          $dateCreated = Carbon::parse($job->created_at);
          $dateClosed = Carbon::parse($job->due);
          $differenceInDays = $dateClosed->diffInDays($dateCreated);

        return view('admin.jobdetail', compact('job', 'differenceInDays'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {


          $result = Job::get()->first(); 

         $job= $result->findOrFail($id);

        //  dd($job);

         return view('admin.update', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $result = Job::get()->first(); 

         $job= $result->findOrFail($id);

         $request->validate([
            'company' => 'required|max:255',
            'position' => 'required',
            'location' => 'required',
            'period' => 'required',
            'due' => 'required',
            'description' => 'required'
        ]);


        $job->update([
            'company' => $request->company,
            'position' => $request->position,
            'location' => $request->location,
            'period' => $request->period,
            'due' => $request->due,
            'description' => $request->description
        ]);

        return redirect()->back()->with('status', 'Job information updated successfully!');
    }


}
