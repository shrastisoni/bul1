<?php namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application profile to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$roles = DB::table('roles')->get();
		return view('user.profile')->with('userRole', $roles);
	}
	
	/**
	 * Show the edit profile page to the user.
	 *
	 * @return Response
	 */
	public function editAccount()
	{
		$roles = DB::table('roles')->get();
		return view('user.editAccount')->with('userRole', $roles);
	}
	
	/**
	 * Save the edit profile details of the user.
	 *
	 * @return Response
	 */
	public function editUserAccount()
	{
		$validator = Validator::make(Input::all(), [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255',
			'role_id' => 'required|integer',
		]);
		if ($validator->fails())
		{
			//go to back with errors
			return redirect('/editAccount')->withErrors($validator);;
		}
		else 
		{
			$id = Auth::user()->id;
			$user = User::find($id);
			$user->name = Input::get('name');
			$user->email = Input::get('email');
			$user->role_id = Input::get('role_id');
			$user->save();
		}
		return redirect('/editAccount');
	}
	
	/**
	 * delete the user account.
	 *
	 * @return Response
	 */
	public function deleteAccount()
	{
		$user = User::find(Auth::user()->id);    
		$user->delete();
		return redirect('/auth/logout');
	}

}
