<?php namespace App\Http\Controllers;
use App\Business;
use App\Message;
use App\PhotoAlbum;
use App\User;
use App\UserDetail;
use App\UserMeta;
use App\MessageReceipient;
use Auth;
use DB;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

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
		$user               = User::find(Auth::user()->id);
		$userDetail         = UserDetail::where('userId', $user->id)->first();
		$business           = Business::find($userDetail->businessId);
		$userMetaId         = UserMeta::all()->where('userId', $user->id);
		$arr =array();
		$phone = array();
        foreach ($userMetaId as $key => $value) 
        { 
        	 
        	 if($value['metaKey'] == 'phone')
        	 {
               $phone[$value['metaKey']][] = $value['metaValue'];
        	 }
        	 if($value['metaKey'] == 'urlFacebook' || $value['metaKey'] == 'urlGoogle' || $value['metaKey'] == 'urlTwitter')
              $arr[$value['metaKey']] = $value['metaValue'];
        	  $arr = array_merge($arr,$phone);
        }
        // return $arr;
  //       echo "<pre>";
		// print_r($arr);
		if(empty($business))
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray());
		}
		else 
		{
			$business = (object) array_merge($user->toArray(), $userDetail->toArray(), $business->toArray(), $arr);
		}


		// echo "<pre>";
		// print_r($business);
		return view('home.profileEdit')->withBusiness($business);
	}

	
	public function profileDataSave(Request $request)
	{

		$userId                    = Auth::User()->id;
		$returnValue               = false;
		$userData                  = $request->all();
		$userDetail                = UserDetail::where('userId', $userId)->first();
		$phone      = $userData ['phone'];
		$phone1 = json_decode($phone);
		$userMetaId =UserMeta::all()->where('userId', $userId);
 		$business = Business::find($userDetail->businessId);
		if(empty($business))
		{
			DB::table('userDetails')->where('userId', $userId)->update(['name' => $userData['name'], 'location' => $userData['location'], 'about' => $userData['about'], 'updated_at' => time()]);
		    
		}
		else 
		{
			$business->name              = $userData['name'];
			$business->about             = $userData['about'];
			$business->website           = $userData['website'];
			$business->serviceCoverage   = $userData['serviceCoverage'];		    
			$business->updated_at        = time();
			$business->save();
            DB::table('usersMeta')->where('userId', $userId)->delete();
			// Array to insert values in database
			$arrayInsert =array();
            foreach ($phone1 as $key => $value)
            {
            	if(!empty($value))
            	{
            		$new = array('userId' => $userId,'metaKey' => 'phone','metaValue' => $value);
            		array_push($arrayInsert,$new);
            	}
            }

            
            if(!empty($userData['urlFacebook']))
            {
               $new =array('userId' => $userId,'metaKey' => 'urlFacebook','metaValue' => $userData['urlFacebook']);
               array_push($arrayInsert,$new);

            }
             if(!empty($userData['urlGoogle']))
            {
               $new =array('userId' => $userId,'metaKey' => 'urlGoogle','metaValue' => $userData['urlGoogle']);
               array_push($arrayInsert,$new);

            }
             if(!empty($userData['urlTwitter']))
            {
               $new =array('userId' => $userId,'metaKey' => 'urlTwitter','metaValue' => $userData['urlTwitter']);
               array_push($arrayInsert,$new);

            }
             
            DB::table('usersMeta')->insert($arrayInsert);
			DB::table('userDetails')->where('userId', $userId)->update(['location' => $userData['location'], 'updated_at' => time()]);
		}
		$userDetail = UserDetail::where('userId', $userId)->first();
		$business = Business::find($userDetail->businessId);
        $userMetaId =UserMeta::all()->where('userId', $userId);
        $arr =array();
        $arr =array();
		$phone = array();
		$phoneBlank =array();
        foreach ($userMetaId as $key => $value) 
        { 
        	 
        	 if($value['metaKey'] == 'phone')
        	 {
               $phone[$value['metaKey']][] = $value['metaValue'];
        	 }
        	 if($value['metaKey'] == 'urlFacebook' || $value['metaKey'] == 'urlGoogle' || $value['metaKey'] == 'urlTwitter')
             {
             	$arr[$value['metaKey']] = $value['metaValue'];
             } 
             if(is_array($phone))
			 {
				$arr = array_merge($arr,$phone);	
			 }
			 else
			 {
			 	$arr = array_merge($arr,$phoneBlank);
			 }
        	  
        }
       // return $arr;
		if(empty($business))
		{
			$business = array_merge($userDetail->toArray());
		}
		else 
		{
			$business = array_merge($userDetail->toArray(), $business->toArray() ,$arr);
		}
    	return $business;
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
	
	/*public function sentMessage(Request $request)
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
	}*/


	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */

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
	public function getIncomingMessage(Request $request)
	{
		$messageContentId = DB::table('message_content')->insertGetId(
						array(
						    'meta_Id' => '111', 
						    'subject' => 'Mail',
						    'message' => 'Ankur',
						    'from' => "Ankur Tiwari",
						    'created_at' => time(),
						    'updated_at' => time(),
						    'notification_status' => 12
						    )
						);

		return "Message Done";
	}

	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */
	public function composeMessage(Request $request)
	{
		
		
	}

	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */
	public function getUserMessage(Request $request)
	{
		$result = $request->all();
		$fromUser = $result['user'];
		$userName = Message::where('id', $fromUser)->pluck('from');
		
		// $fromUser = 'useremail3@horsify.com';
		//logged in user
		$userId = Auth::user()->email;
		//SELECT mc.message,mc.from,mc.subject,mc.created_at,mr.receipient_ID FROM message_content as mc JOIN message_receipient as mr ON mc.meta_Id = mc.meta_Id WHERE mr.receipient_ID = "useremail2@horsify.com" and mc.from ="useremail3@horsify.com" group by message_receipient.meta_Id 

            $message1 = DB::table('message_content')
            ->select('message_content.message', 'message_content.created_at', 'message_content.subject', 'message_receipient.receipient_ID', 'message_content.from')
            ->join('message_receipient', 'message_receipient.meta_Id', '=', 'message_content.meta_Id')
			->where('message_receipient.receipient_ID', $userId)
			->where('message_content.from', $userName)
            ->get();
	//print_r($message1);
       /* $message2 = DB::table('message_content')
            ->join('message_receipient', 'message_receipient.meta_Id', '=', 'message_content.meta_Id')
            ->where('message_content.from', $userId)
			->select('message_content.message', 'message_content.created_at', 'message_content.subject', 'message_receipient.receipient_ID', 'message_content.from')
            ->get();*/
            $message2 = DB::table('message_content')
            ->select('message_content.message', 'message_content.created_at', 'message_content.subject', 'message_receipient.receipient_ID', 'message_content.from')
            ->join('message_receipient', 'message_receipient.meta_Id', '=', 'message_content.meta_Id')
            ->where('message_receipient.receipient_ID', $userName )
			->where('message_content.from' , $userId)
			->get();            
      //      print_r($message2);

		$allMessage = array();
		$i = 0;

		/*array_push($message1, $message2);*/
		foreach ($message1 as $key => $value) 
		{
			$allMessage[$i]['message'] = $value->message;
			$allMessage[$i]['created_at'] = $value->created_at;
			$allMessage[$i]['receipient'] = $value->receipient_ID;
			$allMessage[$i]['subject'] = $value->subject;
			$allMessage[$i]['from'] = $value->from;
			$i++;
		}

		foreach ($message2 as $key => $value) 
		{
			$allMessage[$i]['message'] = $value->message;
			$allMessage[$i]['created_at'] = $value->created_at;
			$allMessage[$i]['receipient'] = $value->receipient_ID;
			$allMessage[$i]['subject'] = $value->subject;
			$allMessage[$i]['from'] = $value->from;
			$i++;
		}
		
		foreach ($allMessage as $key => $value) {
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
	    }
		return $allMessage;
	}
       


	/**
	 * get all read/unread message
	 *
	 * @return Response
	 */
	


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

	public function autoLoadAllUsers(Request $request)
	{
		$user = User::select('email')->get();
		return $user;
	}

}
