<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applicants = DB::table('users')
                 ->where('role', 'applicant')
                 ->get();

        $interviews = DB::table('applications')
                 ->where('status', '2')
                 ->get();
        
        $applications = DB::table('applications')
                 ->get();

         $users = DB::table('applications')
                    ->leftJoin('users', 'applications.user_id', '=', 'users.id')
                    ->leftJoin('profiles', 'applications.user_id', '=', 'profiles.user_id')
                    ->leftJoin('jobs', 'applications.job_id', '=', 'jobs.id')
                    ->select(
                        'users.full_name',
                        'applications.id',
                        'profiles.phone',
                        'applications.status',
                        'jobs.position',
                    )
                    ->get();


        $jobs = DB::table('jobs')
                 ->get();
        
        return view('admin.dashboard', compact('applicants', 'interviews', 'applications', 'jobs', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function detail($id)
    {
                $applicant = User::find($id);
                $appId = $applicant->id;

                $profile = DB::table('users')
                    ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
                    ->select(
                        'users.id',
                        'users.full_name',
                        'users.email',
                        'profiles.location',
                        'profiles.phone',
                        'profiles.age',
                        'profiles.gender',
                        'profiles.about',
                        'profiles.resume',
                        'profiles.avatar'
                    )    
                    ->where('users.id', $appId)
                    ->first();
        
                return view('admin.info', compact('profile'));
    }

  

    /**
     * Display the specified resource.
     */
    public function show()
    {
         $applicants = DB::table('users')
         ->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')
         ->select('users.id', 'users.full_name', 'users.email', 'profiles.location','profiles.phone', 'profiles.age', 'profiles.gender', 'profiles.about', 'profiles.resume', 'profiles.avatar' )
         ->where('role', 'applicant')    
        ->get();

        return view('admin.applicants', compact('applicants'));
    }
}
