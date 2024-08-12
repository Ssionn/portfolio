<?php

namespace App\Models;

use App\Traits\Hashable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Hashable;
}
