<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function exam()
    {
        return $this->belongsTo(Exam::class,'exam_id','id');
    }
    public function Teacher()
    {
        return $this->belongsTo(user::class,'teacher_id','id');
    }
}
