<?php namespace App\Http\Controllers;
use App\Business;
use App\PhotoAlbum;
use App\User;
use Auth;
class HomeController extends Controller {

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	
	/**
	 * Display a loggedin user's business profile.
	 *
	 * @return Response
	 */
	public function profile()
	{
		//all users
		$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
    	return view('home.profile')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business albums.
	 *
	 * @return Response
	 */
	public function photos()
	{
		//all users
		$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
		$albums = PhotoAlbum::where('user_id', Auth::user()->id)->where('type', 'album')->get();
    	return view('home.photos')->withBusiness($business)->withAlbums($albums);
	}
	
	/**
	 * Display a loggedin user's business connections.
	 *
	 * @return Response
	 */
	public function connections()
	{
		//all users
    	$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
    	return view('home.connections')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business reviews.
	 *
	 * @return Response
	 */
	public function reviews()
	{
		//all users
    	$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
    	return view('home.reviews')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business messages.
	 *
	 * @return Response
	 */
	public function messages()
	{
		//all users
    	$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
    	return view('home.messages')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business settings.
	 *
	 * @return Response
	 */
	public function settings()
	{
		//all users
    	$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
    	return view('home.settings')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business ourFeeds.
	 *
	 * @return Response
	 */
	public function ourFeed()
	{
		//all users
    	$business = Business::findOrFail(User::find(Auth::user()->id)->business->id);
    	return view('home.our-feed')->withBusiness($business);
	}

}
