<?php

namespace App\Models;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class examAttend extends Model
{
    use HasFactory;
    protected $guarded=[];
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
    public function Student()
    {
        return $this->belongsTo(user::class,'student_id','id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id','id');
    }
}
