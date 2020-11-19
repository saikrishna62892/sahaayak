<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counsellor;
use Storage;

class CounsellorController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        
    	$counsellor= new Counsellor();

    	$data=request()->validate(
            [
                'image' => 'file|image|max:3000',
                'name'=>'required',
                "college_id'=>'required',
                'email'=>'required',
                'profession'=>'required',
            ]);

            if ($request->hasFile('image')) 
            {
	        $image1 = $request->image;
            $destinationPath = $image->store('uploads/counsellors/img','s3');
            $news->image1 = basename($destinationPath);
	        $name = time().'.'.$image->getClientOriginalExtension();
	         = public_path('/img/news/');
	        $image->move($destinationPath, $name);
	        $news->image=$name;*/
    	   }

    	$counsellor->name=$request->name;
    	$counsellor->email=$request->email;
    	$counsellor->qualification=$request->qualification;
        $counsellor->bio=$request->bio;
        $counsellor->achievements=$request->achievements;

        
		$news->save();
        $this->sendNewsNotif($news->headline);
        return redirect()->back();
    
    }
}
    }