<?php namespace App\Http\Controllers;
use App\Follow;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class FollowController extends Controller 
{

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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function followIt()
	{
		// $type = $input['toType'];
		// $typeId = $input['typeId'];
		return var_dump($request->all());
		//returns the changed follow permission for requested data
		$follow = Follow::firstOrNew(['user_id' => Auth::user()->id, 'toType' => $type, 'typeId' => $typeId]);
		$follow->user_id = Auth::user()->id;
		$follow->toType = $type;
		$follow->typeId = $typeId;
		$follow->permit = !($user->permit);
		$follow->epochUpdatedAt = time();
		$follow->save();
		return $follow->permit;
	}
}
