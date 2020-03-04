<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewTweets extends Model
{
    //
    protected $fillable = array(
    	'message',
    	'author',
    );
}
