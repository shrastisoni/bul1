<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller {
	
	
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
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//all users
		$users = User::all();
    	return view('user.index')->withUsers($users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//able to create or return form to register
		$roles = Role::all();
		return view('user.create')->withRoles($roles);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//user data storing into database
		$this->validate($request, [
		    'name' => 'required',
		    'email' => 'required',
		    'role_id' => 'required'
		]);
		//
		$input = $request->all();
	    User::create($input);
		Session::flash('flash_message', 'User successfully added!');
	    return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$user = User::findOrFail($id);
    	return view('user.show')->withUser($user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//user is able to edit?
		$user = User::findOrFail($id);
		$roles = Role::all();
    	return view('user.edit')->withUser($user)->withRoles($roles);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$user = User::findOrFail($id);

	    $this->validate($request, [
	        'name' => 'required',
		    'email' => 'required',
		    'role_id' => 'required'
	    ]);
	
	    $input = $request->all();
	
	    $user->fill($input)->save();
	
	    Session::flash('flash_message', 'User successfully updated!');
	
	    return redirect()->back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//delete user
		$user = User::findOrFail($id);

	    $user->delete();
	
	    Session::flash('flash_message', 'User successfully deleted!');
	
	    return redirect()->route('user.index');
	}

}
