<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Answer;
use App\Survey;
use App\Question;
use App\User;
use Auth;
class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
        $this->middleware(['is_user'])->only(['show','getResult']);
        $this->middleware(['is_admin'])->only(['create','store','editQuestions','edit','update','destroy']);
    }

    public function create(Questionnaire $questionnaire)
    {
        $question = new Question();
        $answers = [];
        $answers[0] = new Answer();
        $answers[1] = new Answer();
        $answers[2] = new Answer();
        $answers[3] = new Answer();
        return view('question.create',compact('questionnaire','answers','question'));
    }

    public function store(Questionnaire $questionnaire)
    {
        $data = $this->getValidatedQuestion();
        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);
        return redirect('admin/home/questionnaires/'.$questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers');
        return view('survey.show',compact('questionnaire'));
    }

    public function getResult(Questionnaire $questionnaire)
    {
        $score=0;
        $data = request()->validate([
            'response.*.answer_id' => 'required'
        ]);

        foreach($data['response'] as $a)
        {
            $score=$score+ Answer::find($a['answer_id'])->point;
        }
        $survey= Survey :: create(['awarded_point'=>$score,'user_id'=>auth()->user()->id,'questionnaire_id'=>$questionnaire->id]);
        $survey->save();
        $user_name=Auth::user()->name;
        $questions_count=Question::where('questionnaire_id',$questionnaire->id)->count();
        $assessment=Questionnaire::where('id',$questionnaire->id)->get();
        $assessment_name=$assessment[0]->questionnaireTitle;

        return view('survey.result',compact('score','user_name','questions_count','assessment_name'));
    }

    public function editQuestions(Questionnaire $questionnaire)
    {
        $questionnaire->load('questions');
        return view('question.allquestions',compact('questionnaire'));
    }

    public function edit(Questionnaire $questionnaire,Question $question)
    {
        $answers = $question->answers;
        return view('question.edit',compact('questionnaire','question','answers'));
    }

    public function update(Questionnaire $questionnaire,Question $question)
    {
        $data = $this->getValidatedQuestion();
        $question->update($data['question']);
        $answers=$question->answers;        
        $i=0;
        foreach($answers as $answer)
        {
            $answer->update($data['answers'][$i++]);
        }
        return redirect('admin/home/questionnaires/'.$questionnaire->id.'/editQuestions');
    }

    public function destroy(Questionnaire $questionnaire,Question $question)
    {
        $question->delete();
        return redirect('admin/home/questionnaires/'.$questionnaire->id.'/editQuestions');
    }
    public function getValidatedQuestion()
    {
        return request()->validate([
                'question.question' => 'required',
                'answers.*.answer' => 'required',
                'answers.*.point' => 'required'
            ]);
    }
}
