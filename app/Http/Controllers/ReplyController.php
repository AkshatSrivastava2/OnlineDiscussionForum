<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Question;	

class ReplyController extends Controller
{
    //
    public function create($id)
    {
    	$question=Question::find($id);
    	return view('reply.create',compact('question')); 
    }
    public function store(Question $question)
    {
    	$this->validate(request(),[
    		'reply'=>'required'
    	]);
        $question->addReply(request('reply'));
    	return back();
    }
}
