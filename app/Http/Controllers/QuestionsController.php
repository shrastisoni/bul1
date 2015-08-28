<?php namespace App\Http\Controllers;
use DB;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class QuestionsController extends Controller {

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
	 * Show the edit profile page to the user.
	 *
	 * @return true if user is able to post question
	 */
	public function userCan($doAction)
	{
		$getAccessValue = 'userAccess.'.Auth::user()->role_id.'.question.canPost';
		return Config::get($getAccessValue);
	}
	
	
	/**
	 * Post a new Question.
	 *
	 * @return Question id if question is posted successfully
	 */
	public function postQuestion($heading, $description = '')
	{
		$userCanPost = TRUE;
		$return = NULL;
		if ($userCanPost) 
		{
			if ((!empty($heading))) 
			{
				$return = DB::table('questions')->insertGetId(
					array(
					    'heading' => $heading, 
					    'description' => $description,
					    'postedByUserId' => Auth::user()->id,
					    'epochUpdatedAt' => time(),
					    'epochCreatedAt' => time()
					    )
					);
			}
			else 
			{
				$return = 'message like cannot post empty question';
			}
		}
		else 
		{
			$return = 'message like user is unable to post questions';
		}
		return $return;
	}

	/**
	 * Post a new Question.
	 *
	 * @return Question id if question is posted successfully
	 */
	public function editQuestion($questionId, $questionData = array())
	{
		$userCanEdit = TRUE;
		$return = NULL;
		if ($userCanEdit)
		{
			if ((!empty($heading))) 
			{
				$return = DB::table('questions')->insertGetId(
					array(
					    'heading' => $heading, 
					    'description' => $description,
					    'postedByUserId' => Auth::user()->id,
					    'epochUpdatedAt' => time(),
					    'epochCreatedAt' => time()
					    )
					);
			}
			else 
			{
				$return = 'message like cannot post empty question';
			}
		}
		else 
		{
			$return = 'message like user is unable to post questions';
		}
		return $return;
	}

}
