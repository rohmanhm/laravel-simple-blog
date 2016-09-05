<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use Notifiable;
    protected $primaryKey = 'id';
    protected $fillable = [
    	'name',
    	'username',
    	'password',
    	'email',
    ];

    protected $hidden = [
    	'password',
    	'created_at',
    	'updated_at'
    ];
    
    public function getAuthPassword()
    {
        return $this->password;
    }

	// Make relationship to Posts table
    public function posts ()
    {
    	return $this->hasMany('App\Post', 'author_id', 'id');
    }
}
