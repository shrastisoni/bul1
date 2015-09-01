<?php namespace App\Http\Controllers;
use App\Follow;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class FollowController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($type, $typeId)
	{
		//
		$input = array(
			'byUserId' => Auth::user()->id,
			'toType' => $type,
			'typeId' => $typeId,
			'permit' => TRUE,
			'epochCreatedAt' => time(),
			'epochCreatedAt' => time()
		);
	    Follow::create($input);
		Session::flash('flash_message', 'You have followed!');
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
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$input = array(
			'byUserId' => Auth::user()->id,
			'toType' => $type,
			'typeId' => $typeId,
			'permit' => TRUE,
			'epochCreatedAt' => time(),
			'epochCreatedAt' => time()
		);
	    $question = Follow::findOrFail($id);

	    $this->validate($request, [
	        'title' => 'required',
	        'description' => 'required'
	    ]);
	
	    $input = $request->all();
	
	    $question->fill($input)->save();
	
	    Session::flash('flash_message', 'Question successfully updated!');
	
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
		//
	}

}
