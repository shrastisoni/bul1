<?php namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PhotoAlbum;
use App\User;
use App\Business;
use Illuminate\Http\Request;

class PhotoAlbumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		if(Auth::check())
		{
			$albums = PhotoAlbum::where('user_id', Auth::user()->id)->where('type', 'album')->get();
			$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
	    	return view('photoAlbum.show')->withAlbums($albums)->withBusiness($business);
		}
		return redirect('businesses');
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
	public function store()
	{
		//
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
		$albums = PhotoAlbum::where('user_id', $id)->where('type', 'album')->get();
		$business = Business::findOrFail($id);
    	return view('photoAlbum.show')->withAlbums($albums)->withBusiness($business);
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
