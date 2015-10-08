<?php

namespace App\Http\Controllers;

use App\User;
use Mail;
use App\Http\Controllers\Controller;
use App\Business;
use App\Message;
use App\PhotoAlbum;
use App\UserDetail;
use App\MessageReceipient;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class MessageController extends Controller
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
     * Create a new controller instance.
     *
     * @return void
     */
    public function simple()
    {
        //insert different data for messade meta table
        $messageMetaId = DB::table('message_meta')->insertGetId(
                    array(
                        'subject' => "Hello",
                        'archived_status' => 'true',
                        )
                    );
        return view('simple');

    }
    /**
     * To handle all the mesaging functionality
     *
     * @param  int  $id
     * @return Response
     */
    public function index(Request $request)
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
        return view('message.index')->withBusiness($business);
    }

    /**
     * To handle all the mesaging functionality
     *
     * @param  int  $id
     * @return Response
     */
    public function getMessage(Request $request)
    {
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
     * To Compose a message
     *
     * @param  int  $id
     * @return Response
     */
    public function createMessage(Request $request)
    {
        $result = $request->all();
        $arrayTo = explode(",", $result['to']);
        
        foreach ($arrayTo as $value) {
            $data = array(
                'name' => "Learning Laravel",
            );
            
            $subject = $result['subject'];
            $messageText = $result['message'];

            Mail::send('simple', $data, function ($message) use ($value, $subject, $messageText) {
                $message->from("horsify@sandbox87296eeb27a6460c8427f09fe54cc53f.mailgun.org", $messageText);
                $message->to($value)->subject($subject);
            });

            //insert different data for messade meta table
            $messageMetaId = DB::table('message_meta')->insertGetId(
                        array(
                            'subject' => $subject,
                            'archived_status' => 'true',
                            )
                        );
            
            //insert different data for message content table
            $messageContentId = DB::table('message_content')->insertGetId(
                        array(
                            'meta_Id' => $messageMetaId, 
                            'subject' => $subject,
                            'message' => $messageText,
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
                            'receipient_ID' => $value,
                            'notification_status' => "1",
                            )
                        );
        }
        
        return $messageMetaId;
    }

    /**
    * To Compose a message
    *
    * @param  int  $id
    * @return Response
    */
    public function emailAutoSuggest(Request $request)
    {
        $user = User::select('email')->get();
        return $user;
    }

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
}