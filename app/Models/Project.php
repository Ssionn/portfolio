<?php

namespace App\Models;

use App\Traits\Hashable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Hashable;

    protected $fillable = [
        'owner',
        'repo',
        'description',
        'star_count',
        'fork_count',
        'commit_count',
    ];

    public function getGithubImageAttribute()
    {
        return "https://opengraph.githubassets.com/$this->id/$this->owner/$this->repo";
    }
}
