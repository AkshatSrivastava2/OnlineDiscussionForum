<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use App\Question;	

class ReplyController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth');
    }
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
        $user_id=auth()->id();
        $question->addReply(request('reply'),$user_id);
    	return back();
    }
}
