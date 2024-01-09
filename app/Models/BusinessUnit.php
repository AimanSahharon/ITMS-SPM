<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BusinessUnit extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function RequestProjects()
    {
        return $this->hasMany(RequestProject::class);
    }

    public function Projects()
    {
        return $this->hasMany(Project::class);
    }
}
