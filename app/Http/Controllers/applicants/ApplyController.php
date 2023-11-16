<?php

namespace App\Http\Controllers\applicants;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
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
        return view('pages.jobs', compact('jobs'));
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

            return view('pages.jobs', compact('jobs'));
    } 
}
