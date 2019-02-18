<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   

    protected $fillable = ['title','body','cover_image','user_id']; //names of fields on form  
	//if you cahnage the name of table Just write it
    protected $table = "posts";

    //if you change the PrimaryKey 
    public $primaryKey = "id";

    //if you turn on timestamps
    public $timestamps = TRUE;

    public function user(){
    	return $this->belongsTo(User::class);
    }

}
