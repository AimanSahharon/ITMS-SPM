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

    protected $fillable =['ProjectID', 'BUID', 'Title','System_Owner', 'PIC', 'Lead_Developer', 'Start_Date', 'End_Date', 'Duration', 'Status'];

    public function bunits()
    {
        return $this->belongsTo(BunitController::class, 'Name');
    }

    public function developers()
    {
        return $this->belongsToMany(Developer::class, 'developer_project');
    }


    public function leaddevelopers()
    {
        return $this->belongsToMany(Developer::class, 'leaddeveloper_project');
    }




}
