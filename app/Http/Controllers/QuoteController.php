<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quote;
use Auth;
use DB;
use App\Notifications\InspiremeNotification;
use App\User;
use App\Traits\NotificationTrait;
class QuoteController extends Controller
{
    use NotificationTrait;

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
    $this->sendInspiremeNotif($quote->Quote);
    return redirect()->back()->with('message', 'Posted Succcesfully');
	}
    public function deletequote(Quote $quoteid){
        $quoteid->delete();
        return redirect()->back();
    }
    public function editquote(Quote $quote){
         return view('quotes.edit',compact('quote'));
    }

    public function update(Quote $quote)
    {

        $data=request()->validate(
            [
                'Author' => 'required',
                'Quote' => 'required',
                'Inspired_from' => 'required',
                'image' => 'file|image|max:3000',
            ]);



            if (request()->hasFile('Image')) {
            $image = request()->Image;
            $name = $user->id.'_'.$temp.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/quotes/');
            $image->move($destinationPath, $name);
            $data['image'] = $name;
        }
        $data['Tag'] = request()->Tag;
        $data['Link'] = request()->Link;

        $quote->update($data);
        return redirect()->route('adminDashboard');
    }



}
