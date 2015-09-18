<?php namespace App\Http\Controllers;
use App\Business;
use App\PhotoAlbum;
use App\User;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller 
{

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function search()
	{
		$businesses = Business::all();
		return view('business.search')->withBusinesses($businesses);
	}
	
	/**
	 * Display a loggedin user's business profile.
	 *
	 * @return Response
	 */
	public function profile($id)
	{
		//all users
		$business = Business::where('uName', $id)->first();
    	return view('business.profile')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business albums.
	 *
	 * @return Response
	 */
	public function photos($id)
	{
		//all users
		$business = Business::where('uName', $id)->first();
		$albums = PhotoAlbum::where('user_id', $business->user_id)->where('type', 'album')->get();
    	return view('business.photos')->withBusiness($business)->withAlbums($albums);
	}
	
	/**
	 * Display a loggedin user's business connections.
	 *
	 * @return Response
	 */
	public function connections($id)
	{
		//all users
		$business = Business::where('uName', $id)->first();
    	return view('business.connections')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business reviews.
	 *
	 * @return Response
	 */
	public function reviews($id)
	{
		//all users
		$business = Business::where('uName', $id)->first();
    	return view('business.reviews')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business messages.
	 *
	 * @return Response
	 */
	public function messages($id)
	{
		//all users
		$business = Business::where('uName', $id)->first();
    	return view('business.messages')->withBusiness($business);
	}
	
	
	/**
	 * Display a loggedin user's business ourFeeds.
	 *
	 * @return Response
	 */
	public function ourFeed($id)
	{
		//all users
		$business = Business::where('uName', $id)->first();
    	return view('business.our-feed')->withBusiness($business);
	}

}
