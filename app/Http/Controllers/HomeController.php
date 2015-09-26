<?php namespace App\Http\Controllers;
use App\Business;
use App\Message;
use App\PhotoAlbum;
use App\User;
use App\UserDetail;
use App\MessageReceipient;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
	 * Display a loggedin user's business profile.
	 *
	 * @return Response
	 */
	public function profileEdit()
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
    	return view('home.profileEdit')->withBusiness($business);
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
    	return view('business.messages')->withBusiness($business);
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
	 * sending and inserting message in the table.
	 *
	 * @return Response
	 */
	public function sentMessage(Request $request)
	{
		//all users
		$result = array();
		$result = $request->all();
		$result['subject'] = "chat";
		
		//insert different data for messade meta table
		$messageMetaId = DB::table('message_meta')->insertGetId(
					array(
					    'subject' => $result['subject'],
					    'archived_status' => 'true',
					    )
					);
		
		//insert different data for message content table
		$messageContentId = DB::table('message_content')->insertGetId(
					array(
					    'meta_Id' => $messageMetaId, 
					    'subject' => $result['subject'],
					    'message' => $result['message'],
					    'from' => Auth::user()->email,
					    'created_at' => time(),
					    'updated_at' => time(),
					    'notification_status' => 12
					    )
					);

		//insert different data for message receipient table
		$messageReceipientId = DB::table('message_receipient')->insertGetId(
					array(
					    'meta_Id' => $messageMetaId, 
					    'receipient_ID' => "useremail2@horsify.com",
					    'notification_status' => "1",
					    )
					);

		return  $messageReceipientId ;
	}

	/**
	 * get all unread message
	 *
	 * @return Response
	 */
	


	/**
	 * get all unread message
	 *
	 * @return Response
	 */
	public function getUnreadMessage(Request $request)
	{
		//fetching all unread message 
	    $messageMeta = MessageReceipient::all();
	    return $messageMeta;
	}

	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */
	public function getAllMessage(Request $request)
	{
		////getting all the receipiant ids on the basis of looged in user
		$userId = Auth::user()->email;
		$messageReceipaient = MessageReceipient::where('receipient_ID', $userId)->get();
		$metaIds = array();

		//storing all the message recepiaent 
		foreach ($messageReceipaient as $key => $value) 
		{
			$metaIds[] = $value['meta_Id'];
		}

		//fetching all the message to display
		$messageReceipaientResult = Message::all();
		return $messageReceipaientResult;
	}

	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */
	public function getUserMessage(Request $request)
	{

		$result = $request->all();

		//from user 
		$fromUser = $result['user'];
		
		//logged in user
		$userId = Auth::user()->email;
		
		$message1 = Message::all();
		foreach ($message1 as $key => $value) {
	    	
	    	//getting profile pic path
	    	$email = $value['from'];
			$userName = User::where('email', $email)->pluck('id');
			$profilePic = UserDetail::where('userid', $userName)->pluck('profilePicPath');
			$value['path'] = $profilePic;	

			//checking data to display user name
	    	if($value['from'] == $userId)
	    	{
	    		$value['from'] = "Me";	
	    	}
	    	else
	    	{
	    		$value['from'] = UserDetail::where('userid', $userName)->pluck('name');
	    	}

	    	//changing date to epoch time to display in front end
			if(isset($value['created_at']))
	    	{
	    		$epoch = strtotime($value['created_at']);	
				$value['epoch'] = $epoch;
	    	}

	    	//escapting html special character to display in fornt end
	    	/*if(isset($value['message']))
	    	{
	    		$value['message'] = htmlspecialchars($value['message']);
	    	}*/
	    }
		
		return $message1;
	}

	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */
	public function getShortDescription(Request $request)
	{
		//fetching all the receipient ids 
		$userId = Auth::user()->email;
		$message = MessageReceipient::where('receipient_ID', $userId)->get();
		$metaIds = array();

		//fetching meta ids and storing in the array
		foreach ($message as $key => $value) 
		{
			$metaIds[] = $value['meta_Id'];
		}

		//getting all the message corresponding to a user
		$message = Message::whereIn('meta_Id', $metaIds)->groupBy('from')->get();
		foreach ($message  as $key => $value) {

			//fetching user id on the basis of email
			$email = $value['from'];
			$userName = User::where('email', $email)->pluck('id');

			//converting time into epoch value
			$epoch = strtotime($value['created_at']);	
			$value['epoch'] = $epoch;

			//user name on the basis of email
			if($value['from'] == $userId)
	    	{
	    		//if message is sending by logged in user set "me"
	    		$value['from'] = "Me";	
	    	}
	    	else
	    	{
	    		//if message is sending by other email address then set user name instead of email id
	    		$value['from'] = UserDetail::where('userid', $userName)->pluck('name');
	    	}

	    	//getting user profile picture path
	    	$profilePic = UserDetail::where('userid', $userName)->pluck('profilePicPath');
			$value['path'] = $profilePic;	
		}

		return $message;
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
