<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\User;

class Reply extends Model
{
    //
    protected $fillable=['reply','question_id','user_id'];
    public function question()
    {
    	return $this->belongsTo(Post::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
