<?php namespace App\Http\Controllers;
use App\Business;
use App\PhotoAlbum;
use App\User;
use App\UserDetail;
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
	public function index()
	{
		$businesses = Business::all();
		foreach ($businesses as $key => $business) 
		{
			$business->userDetail = UserDetail::where('businessId', $business->id)->first();
			$business->user = User::find($business->userDetail->userId);
		}
		return view('business.search')->withBusinesses($businesses);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function search()
	{
		$businesses = Business::all();
		foreach ($businesses as $key => $business) 
		{
			$userDetail = UserDetail::where('businessId', $business->id)->first();
			$user = User::find($userDetail->userId);
			$businesses[$key] = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		}
		return view('business.search')->withBusinesses($businesses);
	}
	
	/**
	 * Display a loggedin user's business profile.
	 *
	 * @return Response
	 */
	public function profile($id)
	{
		//business profile data
		$user = User::where('userName', $id)->first();
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			return redirect('/user/'.$user->userName.'/profile');
		}
		$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
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
		$user = User::where('userName', $id)->first();
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			return redirect('/user/'.$user->userName.'/profile');
		}
		$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
		$albums = PhotoAlbum::where('user_id', $business->userId)->where('type', 'album')->get();
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
		$user = User::where('userName', $id)->first();
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			return redirect('/user/'.$user->userName.'/profile');
		}
		$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
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
		$user = User::where('userName', $id)->first();
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			return redirect('/user/'.$user->userName.'/profile');
		}
		$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
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
		$user = User::where('userName', $id)->first();
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			return redirect('/user/'.$user->userName.'/profile');
		}
		$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
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
		$user = User::where('userName', $id)->first();
		$userDetail = UserDetail::where('userId', $user->id)->first();
		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			return redirect('/user/'.$user->userName.'/profile');
		}
		$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray());
    	return view('business.our-feed')->withBusiness($business);
	}

}
