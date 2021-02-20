<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;
use App\Models\Answers;


class Question extends Model
{
    use HasFactory;
    protected $fillable=[
        'question',
        'quiz_id'
    ];

    // Questions have answers
    public function answers(){
        return $this->hasMany(Answer::class);
    }

    // Questions also belong to quizs
    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }
}
