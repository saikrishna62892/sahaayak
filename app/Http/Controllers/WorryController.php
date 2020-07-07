<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorryController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
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
        return "sfsv";
    }
}
