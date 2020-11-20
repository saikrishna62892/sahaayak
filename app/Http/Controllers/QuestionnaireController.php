<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Notifications\QuestionnaireNotification;
use App\User;
use Carbon\Carbon;
use App\Traits\NotificationTrait;
use Session;

class QuestionnaireController extends Controller
{
    use NotificationTrait;

   public function __construct()
    {
        $this->middleware(['auth','verified','is_admin']);
    }

    public function create()
    {
        $questionnaire = new Questionnaire();
        return view('questionnaire.create',compact('questionnaire'));
    }

    public function store()
    {
        $data = $this->getValidatedQuestionnaire();
        $questionnaire = Questionnaire::create($data);
        return redirect('admin/home/questionnaires/'.$questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        return view('questionnaire.show',compact('questionnaire'));
    }
    public function edit(Questionnaire $questionnaire)
    {
        return view('questionnaire.edit',compact('questionnaire'));
    }

    public function update(Questionnaire $questionnaire)
    {
        $data = $this->getValidatedQuestionnaire();
        $questionnaire->update($data);
        return redirect('admin/home/questionnaires/'.$questionnaire->id);
    }

    public function destroy(Questionnaire $questionnaire)
    {
        $questionnaire->delete();
        return redirect('admin/home');
    }

    public function complete(Questionnaire $questionnaire)
    {
        $this->sendQuestionnaireNotif($questionnaire);
        return redirect('/admin/home');
    }

    public function getValidatedQuestionnaire()
    {
        return request()->validate(
            [
                'questionnaireTitle'=>'required',
                'questionnairePurpose'=>'required',
            ]);
    }

}
