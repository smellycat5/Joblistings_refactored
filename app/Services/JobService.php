<?php

namespace App\Services;

use App\Models\Job;

Class JobService
{

    public function deleteJob($job){
        // dd($job);
        $job->destroy($job->id);
    }
}