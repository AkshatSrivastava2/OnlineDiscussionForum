<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;

class Question extends Model
{
    //
    protected $fillable=['question','user_id'];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function reply()
    {
    	return $this->hasMany(Reply::class);
    }
    
}
