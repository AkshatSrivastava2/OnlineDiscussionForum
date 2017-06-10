<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class QuestionController extends Controller
{
    //
    public function index()
    {
    	$questions=Question::all();

    	return view('question.index',compact('questions'));
    }
    public function create()
    {
    	return view('question.create');
    }
    public function store()
    {
    	$this->validate(request(),[
    		'question'=>'required'
    	]);
    	Question::create(['question'=>request('question')]);

    	return redirect('/question/create');
    }
}
