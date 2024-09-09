<?php

use App\Jobs\updateProjectDetails;
use Illuminate\Support\Facades\Schedule;

Schedule::job(new updateProjectDetails)->everyMinute();
