<?php

namespace App\Http\Controllers\admin;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

          $applications = DB::table('applications')
                    ->leftJoin('users', 'applications.user_id', '=', 'users.id')
                    ->leftJoin('jobs', 'applications.job_id', '=', 'jobs.id')
                    ->select(
                        'users.full_name',
                        'users.email',
                        'applications.id',
                        'applications.user_id',
                        'applications.status',
                        'applications.created_at',
                        'jobs.company',
                        'jobs.position',

                    )
                    ->whereIn('applications.status', [1, 2])
                    ->get();

                    // dd($applications);

        return view('admin.listing', compact('applications'));
    }

    /**
     * update application status approve.
     */
    public function approve(Request $request, $id)
    {
        $application = Application::findOrFail($id);
        
        // Update the status in the database as needed
        $application->update(['status' => 2]);

        return redirect()->back()->with('status', 'Status updated successfully!');
    }

    /**
     * update application status reject.
     */
    public function reject(Request $request, $id)
    {
         $application = Application::findOrFail($id);

        // Update the status in the database as needed
        $application->update(['status' => 3]);

        return redirect()->back()->with('status', 'Status updated successfully!'); 
    }

    /**
     * update application status hire.
     */
    public function hire(Request $request, $id)
    {
         $application = Application::findOrFail($id);

        // Update the status in the database as needed
        $application->update(['status' => 4]);

        return redirect()->back()->with('status', 'Status updated successfully!'); 
    }

}
