<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Answer extends Model
{
    use HasFactory;
    protected $fillable=[
        'question_id',
        'answer',
        'is_correct'
    ];

    // Answer belongs to questions
    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function storeAnswers($data, $question){
        foreach($data['options'] as $key => $option){
            $is_correct=false;
            if($key==$data['correct_answer']){
                $is_correct=true;
            }
            $answer = Answer::create([
                'question_id'=>$question->id,
                'answer'=>$option,
                'is_correct'=>$is_correct
            ]);
        }
    }

    public function deleteAnswer($questionId){
        Answer::where('question_id', $questionId)->delete();
    }
    public function updateAnswer($data, $question){
        // to update answers, we first need to delete all answers related to the question ID
        $this->deleteAnswer($question->id);
        $this->storeAnswers($data,$question);
    }
}
