<?php namespace App\Http\Controllers;
use App\Business;
use App\PhotoAlbum;
use App\User;
use App\UserDetail;
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
		$user = User::find(Auth::user()->id);
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
    	return view('home.profile')->withBusiness($business);
	}
	
	/**
	 * Display a loggedin user's business albums.
	 *
	 * @return Response
	 */
	public function photos()
	{
		$user = User::find(Auth::user()->id);
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
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
    	$user = User::find(Auth::user()->id);
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
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
    	$user = User::find(Auth::user()->id);
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
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
    	$user = User::find(Auth::user()->id);
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
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
    	$user = User::find(Auth::user()->id);
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
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
    	$user = User::find(Auth::user()->id);
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
    	return view('home.our-feed')->withBusiness($business);
	}

}
