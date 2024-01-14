<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Developer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =['DevID', 'Name', 'Email','PhoneNumber'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'developer_project');
    }

    public function leadprojects()
    {
        return $this->belongsToMany(Project::class, 'leaddeveloper_project');
    }

}
