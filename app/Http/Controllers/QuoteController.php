<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quote;
use Auth;
use DB;
class QuoteController extends Controller
{
    public function save(Request $request)
    {
        $quote= new Quote();
        $user = Auth::user();
    	$temp= DB::table('quotes')->orderBy("id","desc")->value('id');
        $temp++;
        $data = request()->validate([
    		'Author' => 'required',
    		'Quote' => 'required',
    		'Inspired_from' => 'required',
            'image' => 'file|image|max:3000',
            ]);
    	
        
    	$quote->Author = $request->Author;
    	$quote->Quote = $request->Quote;
    	$quote->Inspired_from = $request->Inspired_from;
        $quote->Tag = $request->Tag;
        $quote->Link = $request->Link;
        
    	
    	#for image upload
    if ($request->hasFile('Image')) {
        $Image = $request->file('Image');
        $name = $user->id.'_'.$temp.'.'.$Image->getClientOriginalExtension();
        $destinationPath = public_path('/img/quotes/');
        $Image->move($destinationPath, $name);
        $quote->Image=$name;
    }
    $quote->save();
    return redirect()->back()->with('message', 'Posted Succcesfully');
	}
}
