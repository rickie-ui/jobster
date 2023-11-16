<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = DB::table('jobs')
                        ->latest()
                        ->limit(4)
                        ->get();

                $jobs->map(function ($job) {
                $job->created_at = Carbon::parse($job->created_at)->format("d F, Y");
                return $job;
    });

        return view('index', compact('jobs'));
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

            return view('index', compact('jobs'));
    } 

   
}
