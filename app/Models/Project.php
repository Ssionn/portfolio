<?php

namespace App\Models;

use App\Traits\Hashable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getGithubImageAttribute()
    {
        return "https://opengraph.githubassets.com/$this->id/$this->owner/$this->repo";
    }
}
