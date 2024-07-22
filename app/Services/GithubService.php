<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GithubService
{
    private $token;
    private $baseUrl = 'https://api.github.com';

    public function __construct()
    {
        $this->token = config('github.token');
    }

    public function getRepoStats($owner, $repo): array
    {
        $cacheKey = "github_stats_{$owner}_{$repo}";

        return Cache::remember($cacheKey, now()->addHours(1), function () use ($owner, $repo) {
            $response = Http::withHeaders([
                "Accept" => "application/vnd.github.v3+json",
                "Authorization" => "Bearer " . $this->token,
                "X-GitHub-Api-Version" => "2022-11-28",
            ])->get("{$this->baseUrl}/repos/{$owner}/{$repo}");

            if ($response->failed()) {
                return null;
            }

            $data = $response->json();

            return [
                'stars' => $data['stargazers_count'] ?? 0,
                'forks' => $data['forks_count'] ?? 0,
                'contributors' => $this->getContributorsCount($owner, $repo),
                'commits' => $this->getCommitsCount($owner, $repo)
            ];
        });
    }

    private function getContributorsCount($owner, $repo)
    {
        $response = Http::withHeaders([
            "Accept" => "application/vnd.github.v3+json",
            "Authorization" => "Bearer " . $this->token,
            "X-GitHub-Api-Version" => "2022-11-28",
        ])->get("{$this->baseUrl}/repos/{$owner}/{$repo}/contributors", [
            'per_page' => 25,
            'anon' => 'true'
        ]);

        if ($response->failed()) {
            return 0;
        }

        return count($response->json());
    }

    private function getCommitsCount($owner, $repo)
    {
        $response = Http::withHeaders([
            "Accept" => "application/vnd.github.v3+json",
            "Authorization" => "Bearer " . $this->token,
            "X-GitHub-Api-Version" => "2022-11-28",
        ])->get("{$this->baseUrl}/repos/{$owner}/{$repo}/commits", [
            'per_page' => 25
        ]);

        if ($response->failed()) {
            return 0;
        }

        return count($response->json());
    }
}
