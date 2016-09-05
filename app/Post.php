<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $primaryKey = 'id';
	protected $fillable = [
		'title',
		'content',
		'author_id'
	];
	// Make relationship to Users table
    public function users ()
    {
    	return $this->belongsTo('App\User', 'author_id');
    }
}
