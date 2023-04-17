<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function department()
    {
        return $this->belongsTo(Department::class,'class_id','id');
    }
}
