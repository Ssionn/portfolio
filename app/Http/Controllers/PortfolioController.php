<?php

namespace App\Http\Controllers;

use App\Models\Me;
use App\Models\Portfolio;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $portfolio = Portfolio::first();
        $who = Me::first();

        return view('portfolio', [
            'projects' => $projects,
            'portfolio' => $portfolio,
            'who' => $who,
        ]);
    }
}
