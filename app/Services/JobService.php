<?php

namespace App\Services;

use App\Models\Job;

Class JobService
{
    public function showJobs()
    {
        $organizations = Job::with('organization')->with('organization')->get();
        return $organizations;
    }

    public function storeJob($validated)
    {
        $data = Job::create($validated);
        return $data;
    }

    public function editJob($validatedJob, $id)
    {
        $id->update($validatedJob);
    }

    public function deleteJob($job)
    {
        // dd($job);
        $job->destroy($job->id);
    }
}