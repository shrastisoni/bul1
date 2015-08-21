<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Validation;
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest'
		, ['except' => 'getLogout']);
	}
    
      /**
     * Handle a login request to the application.
     *
     * @param  LoginRequest  $request
     * @return Response
     */
    public function postLogin(Request $request)
    {
        $data = array(
            'username'=>$request->get('email'),
            'password'=>$request->get('password')
        );
        
        // Applying validation rules.
        $rules = array(
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
             );
             
        $validator = Validator::make($data, $rules);
		echo "<pre>";
        print_r($validator, $data);
		die;
        if ($validator->fails())
        {
          // If validation falis redirect back to login.
          return Redirect::to('/')->withInput(Input::except('password'))->withErrors($validator);
        }
        else 
        {
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
              );
            // doing login.
            if (Auth::validate($userdata)) 
            {
                if (Auth::attempt($userdata)) 
                {
                    return Redirect::intended('/');
                }
            } 
            else
            {
                // if any error send back with message.
                Session::flash('error', 'Something went wrong'); 
                return Redirect::to('login');
            }
        }
    }

}
