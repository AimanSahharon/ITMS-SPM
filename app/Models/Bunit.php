<?php

namespace App\Models;

use App\Http\Controllers\ProjectController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bunit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =['BUID', 'Name', 'Email','PhoneNumber'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'bunit_project');
    }
}
