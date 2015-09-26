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
		
		$messageMetaId = DB::table('message_meta')->insertGetId(
					array(
					    'subject' => $result['subject'],
					    'archived_status' => 'true',
					    )
					);
		
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
		$userId = Auth::user()->email;
		$message = MessageReceipient::where('receipient_ID', $userId)->get();
		$metaIds = array();

		foreach ($message as $key => $value) 
		{
			$metaIds[] = $value['meta_Id'];
		}

		$message = Message::whereIn('meta_Id', $metaIds)->get();
		return $message;
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

		$message1 = DB::table('message_content')
            ->join('message_receipient', 'message_content.meta_Id', '=', 'message_receipient.meta_Id')
            ->select('message_content.message', 'message_content.subject', 'message_content.from', 'message_content.created_at', 'message_receipient.receipient_ID')
            ->where('message_receipient.receipient_ID', $userId)
            ->where('message_content.from', $fromUser)
            ->orderBy('message_content.created_at', 'desc')
            ->get();

        $message2 = DB::table('message_content')
            ->join('message_receipient', 'message_content.meta_Id', '=', 'message_receipient.meta_Id')
            ->select('message_content.message', 'message_content.subject', 'message_content.from', 'message_content.created_at', 'message_receipient.receipient_ID')
            ->where('message_receipient.receipient_ID', $fromUser)
            ->where('message_content.from', $userId)
            ->orderBy('message_content.created_at', 'desc')
            ->get();
		
		return $message1;
	}

	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */
	public function getShortDescription(Request $request)
	{
		$userId = Auth::user()->email;
		$message = MessageReceipient::where('receipient_ID', $userId)->get();
		$metaIds = array();

		foreach ($message as $key => $value) 
		{
			$metaIds[] = $value['meta_Id'];
		}

		$message = Message::whereIn('meta_Id', $metaIds)->groupBy('from')->get();
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
