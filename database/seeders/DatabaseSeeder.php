<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $projects = [
            [
                'owner' => 'Ssionn',
                'repo' => 'dotfiles',
                'description' => 'My personal dotfiles for Neovim configuration and plugins.'
            ],
            [
                'owner' => 'Ssionn',
                'repo' => 'programming-blog',
                'description' => 'A blog project using OAuth for authentication and minimal JavaScript.'
            ],
            [
                'owner' => 'Ssionn',
                'repo' => 'todo-app',
                'description' => 'A simple, yet effective todo application.'
            ],
            [
                'owner' => 'Ssionn',
                'repo' => 'github-data-dashboard',
                'description' => 'A dashboard for visualizing GitHub data and statistics.'
            ],
        ];

        foreach ($projects as $project) {
            Project::factory()->create($project);
        }
    }
}
