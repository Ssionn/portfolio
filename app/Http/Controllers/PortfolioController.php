<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Ssionn\GithubForgeLaravel\Facades\GithubForge;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        $projectStats = [];

        foreach($projects as $project) {
            $projectStats[$project->repo] = GithubForge::getRepository($project->owner, $project->repo);
            $projectStats[$project->repo]['commits_count'] = count(GithubForge::getCommitsFromRepository($project->owner, $project->repo));
            $projectStats[$project->repo]['contributors_count'] = count(GithubForge::getContributors($project->owner, $project->repo));
        }

        return view('portfolio', compact('projects', 'projectStats'));
    }
}
