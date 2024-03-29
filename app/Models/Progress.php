<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Progress extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function project()
    {
        return $this->hasOne(Project::class, 'ProjectID');
    }
}
