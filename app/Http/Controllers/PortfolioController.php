<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\GithubService;

class PortfolioController extends Controller
{
    private $githubService;

    public function __construct(GithubService $githubService)
    {
        $this->githubService = $githubService;
    }

    public function index()
    {
        $projects = Project::all();

        $projectStats = [];

        foreach($projects as $project) {
            $projectStats[$project->repo] = $this->githubService->getRepoStats($project->owner, $project->repo);
        }

        return view('portfolio', compact('projects', 'projectStats'));
    }
}
