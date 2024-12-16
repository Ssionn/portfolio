<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'description' => 'My personal dotfiles for Neovim configuration and plugins.',
                'user_id' => 1,
            ],
            [
                'owner' => 'Ssionn',
                'repo' => 'programming-blog',
                'description' => 'A blog project using OAuth for authentication and minimal JavaScript.',
                'user_id' => 1,
            ],
            [
                'owner' => 'Ssionn',
                'repo' => 'todo-app',
                'description' => 'A simple, yet effective todo application.',
                'user_id' => 1,
            ],
            [
                'owner' => 'Ssionn',
                'repo' => 'github-data-dashboard',
                'description' => 'A dashboard for visualizing GitHub data and statistics.',
                'user_id' => 1,
            ],
            [
                'owner' => 'Ssionn',
                'repo' => 'github-forge',
                'description' => 'A Laravel package to integrate GitHub API functionality.',
                'user_id' => 1,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        User::firstOrCreate([
            'name' => 'Ssionn',
            'email' => 'ssionn@admin.com',
            'password' => Hash::make(env('ADMIN_PASSWORD')),
        ]);
    }
}
