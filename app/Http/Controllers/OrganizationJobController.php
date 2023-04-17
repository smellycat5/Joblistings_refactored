<?php

namespace App\Http\Controllers;

use App\Models\OrganizationJob;
use App\Models\Job;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $jobs = Job::get();
        // $jobs = Job::where('organization_id',$id)->get();
        // return view('Job.list', compact('jobs'));;
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OrganizationJob $organizationJob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrganizationJob $organizationJob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrganizationJob $organizationJob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Job $job)
    {
        $job->delete();
        return redirect()->route('jobByOrganizationName',$id)->with('deleted');
    }

    public function jobByOrganizationName($id)
    {
        $organization = Organization::findorfail($id);
        
        $jobs = Job::where('organization_id',$id)->get();
        return view('Job.list', compact(['jobs', 'organization']));
    }
}
