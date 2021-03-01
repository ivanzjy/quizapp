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
    private $limit=10; // limit data per page
    private $order = 'DESC';

    // Questions have answers
    public function answers(){
        return $this->hasMany(Answer::class);
    }

    // Questions also belong to quizs
    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }
    public function storeQuestion($data){
        // In DB, quiz is call quiz_id, so we just rename it.
        $data['quiz_id'] =$data['quiz'];
        return Question::create($data);
                print('question saved');
    }
    public function getQuestions(){
        // with quiz is coming from quiz model above
        return Question::orderBy('created_at', $this->order)->with('quiz')->paginate($this->limit);
    }

    public function getQuestion($id){
        return Question::find($id);
    }

    public function findQuestion($id){
        return Question::find($id);
    }
    public function updateQuestion($id, $data){
        $question= Question::find($id);
        $question->question = $data['question'];
        $question->quiz_id = $data['quiz'];
        $question->save();
        return $question;
    }
    public function deleteQuestion($id){
        Question::where('id',$id)->delete();
    }
}
