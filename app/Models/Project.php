<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function developers()
    {
        return $this->belongsToMany(Developer::class, 'developer_project');
    }

    public function development()
    {
        return $this->belongsTo(Development::class, 'ProjectID');
    }

    public function progress()
    {
        return $this->belongsTo(Development::class, 'ProjectID');
    }

    public function leaddeveloper()
    {
        return $this->belongsTo(LeadDeveloper::class, 'DeveloperID');
    }

    public function manager()
    {
        return $this->belongsTO(Manager::class);
    }

}
