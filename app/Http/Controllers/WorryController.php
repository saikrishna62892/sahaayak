<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class WorryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified','is_user']);
    }

    public function show()
    {
    	$user = auth()->user()->load('worries');
    	return view('worrytree',compact('user'));
    }

    public function store()
    {
        //dd(request()->all());
        $data = request()->validate([
            'worries.*.worry' => 'required'
        ]);
        $user = auth()->user();
        $user->worries()->each(function($worry) {
                $worry->delete(); // <-- direct deletion
             });
        $user->worries()->createMany($data['worries']);
        //dd($data);
        return redirect()->back();;
    }
}
