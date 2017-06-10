<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    //
    protected $fillable=['question','user_id'];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}
