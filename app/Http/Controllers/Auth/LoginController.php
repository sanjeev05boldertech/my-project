<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
	 
	
	protected function authenticated($request, $user)
	{
		if($user->type == "booking") {
			return redirect()->to('/booking/deshboard');
		}elseif($user->type == "admin") {
			return redirect()->to('/admin/deshboard');
		}else{
			return redirect()->intended('/');
		}
	}
	
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

	public function logout(Request $request)
	{
		// print_r($request);
		// die("here");
		$this->guard()->logout();
		$request->session()->flush();
        $request->session()->regenerate();
		return redirect()->to('/login');
	}
}
