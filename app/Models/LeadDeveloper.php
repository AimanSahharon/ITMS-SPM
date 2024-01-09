<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadDeveloper extends Model
{
    use HasFactory;
    Use SoftDeletes;

    public function project()
    {
        return $this->hasOne(Project::class);
    }
}
