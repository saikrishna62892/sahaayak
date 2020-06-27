<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Notifications\QuestionnaireNotification;
use App\User;
use Carbon\Carbon;
class QuestionnaireController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questionnaire.create');
    }

    public function store()
    {
        $data=request()->validate(
            [
                'questionnaireTitle'=>'required',
                'questionnairePurpose'=>'required',
            ]);
        $questionnaire = Questionnaire::create($data);
        $users=User::all();
    foreach ($users as $user) {

        $user->notify(new QuestionnaireNotification($questionnaire->questionnaireTitle));
    }
        return redirect('admin/home/questionnaires/'.$questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        //dd($questionnaire->questions);
        return view('questionnaire.show',compact('questionnaire'));
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
