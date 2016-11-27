<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {

        if($user = Socialite::with('facebook')->user()){

            if ($the_user = User::select()->where('email', '=', $user->email)->first())
            {
                Auth::login($the_user);

            }
            else{


                $new_user=User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => null,
                    'type' => 'User',
                    'state'=> 1,
                    'image'=> $user->avatar
                ]);



                Auth::login($new_user);

            }
            return redirect('/');
        }
        else{
            return '¡¡¡Algo fue mal!!!';
        }
    }
}
