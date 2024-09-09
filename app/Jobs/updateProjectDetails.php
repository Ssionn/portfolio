<?php

namespace App\Jobs;

use App\Models\Project;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Foundation\Queue\Queueable;
use Ssionn\GithubForgeLaravel\Facades\GithubForge;

class updateProjectDetails implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct() {}

    /**
     * Execute the job.
     */
    public function handle(): EloquentCollection
    {
        $projects = Project::all();

        foreach ($projects as $project) {
            $projectRepo = GithubForge::getRepository($project->owner, $project->repo);

            $project->star_count = $projectRepo['stargazers_count'];
            $project->fork_count = $projectRepo['forks_count'];
            $project->commit_count = count(GithubForge::getCommitsFromRepository($project->owner, $project->repo));

            $project->save();
        }

        return $projects;
    }
}
