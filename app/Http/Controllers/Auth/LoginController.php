<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {   
        $input = $request->all();
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->is_admin == 1) {
                return redirect()->route('adminDashboard');
            }
            else if(auth()->user()->is_Volunteer == 1){
                if(auth()->user()->volunteer->step2_done == 1)
                {
                    if(auth()->user()->volunteer->is_Approved == 1)
                        return redirect()->route('volunteerDashboard');
                    else{
                        Applicationuth::logout();
                        return view('welcome')->with('message','Your Application is under verification process');
                        }
                }
                else
                    return redirect('/register/step2/'.auth()->user()->id);
            }
            else{
                return redirect()->route('home');
            }
        }
        else{
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
        }
          
    }



    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect(); 
    }
   
    public function handleGoogleCallback()
    {
        try {
  
            $user = Socialite::driver('google')->stateless()->user();
   
            $finduser = User::where('googleid', $user->id)->first();
   
            if($finduser){
   
                Auth::login($finduser);
  
                return redirect('/home');
   
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'googleid'=> $user->id
                    
                ]);
  
                Auth::login($newUser);
   
                return redirect()->back();
            }
  
        } catch (Exception $e) {
            return redirect('auth/google');
        }
    }

    //Facebooksignup

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect(); 
    }

    public function handleFacebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->stateless()->user();

            $finduser = User::where('facebookid', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect('/home');

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebookid'=> $user->id
                    
                ]);

                Auth::login($newUser);

                return redirect()->back();
            }

        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
    }

}
