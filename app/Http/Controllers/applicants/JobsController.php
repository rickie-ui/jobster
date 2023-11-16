<?php

namespace App\Http\Controllers\applicants;

use Carbon\Carbon;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Application;

class JobsController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
    // Store checkbox states in sessions
    if ($request->filled('part_time')) {
        session(['part_time' => true]);
    } else {
        session(['part_time' => false]);
    }

    if ($request->filled('full_time')) {
        session(['full_time' => true]);
    } else {
        session(['full_time' => false]);
    }

    if ($request->filled('temporary')) {
        session(['temporary' => true]);
    } else {
        session(['temporary' => false]);
    }

    if ($request->filled('contract')) {
        session(['contract' => true]);
    } else {
        session(['contract' => false]);
    }

    $query = DB::table('jobs')->latest();

    // Use 'orWhere' conditions for all checkboxes to filter the results
    if (session('part_time')) {
        $query->orWhere('period', 'Part-Time');
    }

    if (session('full_time')) {
        $query->orWhere('period', 'Full-Time');
    }

    if (session('temporary')) {
        $query->orWhere('period', 'Temporary');
    }

    if (session('contract')) {
        $query->orWhere('period', 'Contract');
    }

             $jobs = $query->limit(25)->get();

            $jobs->map(function ($job) {
                $job->created_at = Carbon::parse($job->created_at)->format("d.m.Y");
                return $job;
            });

            
        return view('users.jobs', compact('jobs'));
    }


     /**
     * Search the specified resource.
     */
    public function search(Request $request)
    {
         $query = $request->input('query');

            $jobs = DB::table('jobs')
                ->where('position', 'like', '%' . $query . '%')
                ->get();

            return view('users.jobs', compact('jobs'));
    } 

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $result = Job::get()->first(); 

        $job= $result->findOrFail($id);
        

        //  days left for job
        $currentDate = Carbon::now();
        $dateClosed = Carbon::parse($job->due);
         // Ensure the due date is in the future
        if ($currentDate->lte($dateClosed)) {
            $differenceInDays = $currentDate->diffInDays($dateClosed);
        } else {
            $differenceInDays = -1; // Indicates that the due date has passed
        }

        return view('users.detail', compact('job', 'differenceInDays'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {

        //find user
        $applicant = auth()->id();

        // find job
        $job = Job::findOrFail($id);
        $dueDate = $job->due;
        $jobId = $job->id;

    // Check if the due date is in the future
    if (Carbon::now()->lt(Carbon::parse($dueDate))) {
        // Check if the user has already applied for this job
        $existingApplication = Application::where('applicant_id', $applicant)
            ->where('job_id', $jobId)
            ->first();

        // If the user hasn't applied for this job, create a new application
        if (!$existingApplication) {
            Application::create([
                'applicant_id' => $applicant,
                'job_id' => $jobId,
            ]);

            return redirect()->back()->with('message', 'Job application sent successfully!');
        } else {
            return redirect()->back()->with('message', 'You have already applied for this job!');
        }
    }

    }

    
    /**
     * get a newly created resource in storage.
     */

     public function create() {

        $results = DB::table('applications')
            ->join('jobs', 'applications.job_id', '=', 'jobs.id')
            ->select('applications.*', 'jobs.position', 'jobs.location', 'jobs.company')
            ->where('applications.applicant_id', '=', auth()->id())
            ->get();

            // dd($results);

        return view('users.applications', compact('results'));

     }
}
