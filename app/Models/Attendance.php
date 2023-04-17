<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Student()
    {
        return $this->belongsTo(user::class,'student_id','id');
    }
    public function Department()
    {
        return $this->belongsTo(Department::class,'class_id','id');
    }
    public function Subject()
    {
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
    public function Teacher()
    {
        return $this->belongsTo(user::class,'teacher_id','id');
    }
}
