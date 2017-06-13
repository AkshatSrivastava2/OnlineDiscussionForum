<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\User;
use App\Reply;

class Question extends Model
{
    //
    use Searchable;

    protected $fillable=['question','user_id'];
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function reply()
    {
    	return $this->hasMany(Reply::class);
    }
    public function addReply($reply,$user_id)
    {
        $this->reply()->create(compact('reply','user_id'));
    }
    public function searchableAs()
    {
        return 'questions_index';
    }
}
