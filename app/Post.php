<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = "posts";
    // Primry Key
    public $primaryKey = "id";
    // Timestamps
    public $timestamps = true;	

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function user()
    {	
    	return $this->belongsto('App\User');
    }
}
