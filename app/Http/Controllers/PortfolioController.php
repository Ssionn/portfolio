<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;
use Ssionn\GithubForgeLaravel\Facades\GithubForge;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        foreach ($projects as $project) {
            $cacheKey = "project_{$project->id}_data";

            $projectData = Cache::remember($cacheKey, 3600, function () use ($project) {
                $projectRepo = GithubForge::getRepository($project->owner, $project->repo);

                return [
                    'commit_count' => count(GithubForge::getCommitsFromRepository($project->owner, $project->repo)),
                    'contributor_count' => count(GithubForge::getContributors($project->owner, $project->repo)),
                    'star_count' => $projectRepo['stargazers_count'],
                    'fork_count' => $projectRepo['forks_count'],
                ];
            });

            $project->commit_count = $projectData['commit_count'];
            $project->contributor_count = $projectData['contributor_count'];
            $project->star_count = $projectData['star_count'];
            $project->fork_count = $projectData['fork_count'];
        }

        return view('portfolio', [
            'projects' => $projects,
        ]);
    }
}
