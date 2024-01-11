<?php

namespace App\Models;

use App\Http\Controllers\BunitController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function bunits()
    {
        return $this->belongsToMany(BunitController::class);
    }
}
