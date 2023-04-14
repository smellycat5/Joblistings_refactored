<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Organization;
use App\Http\Requests\JobRequest;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('organization')->get();
        return view('welcome', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizations = Organization::with('job')->get();
        return view('Job.create',compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobRequest $request)
    {
        $validated = $request->validated();
        Job::create($validated);
        return redirect()->route('job.index');
        // return $validated;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job =Job::find($id);
        return view('Job.details', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('Job.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JobRequest $request, Job $job)
    {
        $validatedjob = $request->validated();
        $job->update($validatedjob);
        
        return redirect()->route('job.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        return 1;
    }
     
}
