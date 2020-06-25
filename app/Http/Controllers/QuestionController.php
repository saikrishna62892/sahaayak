<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Answer;
use App\Survey;
class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Questionnaire $questionnaire)
    {
        return view('question.create',compact('questionnaire'));
    }

    public function store(Questionnaire $questionnaire)
    {
        //dd(request()->all());
        $data=request()->validate([
        		'question.question' => 'required',
        		'answers.*.answer' => 'required',
                'answers.*.point' => 'required'
        	]);
        //dd($data);
        $question = $questionnaire->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);
        $questionnaires = Questionnaire::all(); 
        return view('admin.adminHome',compact('questionnaires'));
    }

    public function show(Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers');
        return view('question.show',compact('questionnaire'));
    }

    public function getResult(Questionnaire $questionnaire)
    {
        $score=0;
        $data = request()->validate([
            'response.*.answer_id' => 'required'
        ]);

        //dd($data['response']);
        foreach($data['response'] as $a)
        {
            $score=$score+ Answer::find($a['answer_id'])->point;
        }
        $survey= Survey :: create(['awarded_point'=>$score,'user_id'=>auth()->user()->id,'questionnaire_id'=>$questionnaire->id]);
        $survey->save();
        return 'Thank you';
        //dd($score);
/*      
        $users = DB::table('answers')->select('point')->where()->get();

        $data['user_id'] = auth()->user()->id;
        $data['questionnaire_id'] = $questionnaire->id;
        dd($data);*/
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    

    public function destroy()
    {

    }
}
