<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;
use Session;

class QuestionController extends Controller {
	

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$questions = Question::all();
    	return view('question.index')->withQuestions($questions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('question.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
		    'title' => 'required',
		    'description' => 'required'
		]);
		
		//
		$input = $request->all();

	    Question::create($input);
		Session::flash('flash_message', 'Question successfully added!');
	    return redirect()->back();
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
		$question = Question::findOrFail($id);

    	return view('question.show')->withQuestion($question);
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
		$question = Question::findOrFail($id);

    	return view('question.edit')->withQuestion($question);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$question = Question::findOrFail($id);

	    $this->validate($request, [
	        'title' => 'required',
	        'description' => 'required'
	    ]);
	
	    $input = $request->all();
	
	    $question->fill($input)->save();
	
	    Session::flash('flash_message', 'Question successfully updated!');
	
	    return redirect()->back();
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
		$question = Question::findOrFail($id);

	    $question->delete();
	
	    Session::flash('flash_message', 'Question successfully deleted!');
	
	    return redirect()->route('question.index');
	}

}
