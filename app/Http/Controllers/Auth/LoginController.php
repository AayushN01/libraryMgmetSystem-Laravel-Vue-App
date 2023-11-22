<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

    public function loginForm()
    {
        return view('auth.login');
    }

    public function loginSubmit(Request $request)
    {
        $validator = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user = User::where('email',$validator['email'])->first();
        if($user){
            $creds = $request->except('_token');
            if(!$user || !Hash::check($validator['password'], $user->password)){
                return redirect()->back()->with('fail','Incorrect creds. Please try again');
            }elseif(Auth::attempt($creds)){
                return redirect(RouteServiceProvider::HOME)
                ->withSuccess('You have Successfully logged in.');
            }
        }
        return redirect()->back()->with('error','Incorrect credentials. Please try again');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
