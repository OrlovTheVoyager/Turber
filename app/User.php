<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type', 'licence'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function publish(Post $post)
    {
        $this->posts()->save($post);
    }

    public function type()
    {
        return $this->type;
    }

    public function isType($type)
    {
        if ( $type == $this->type ) {
            return true;
        }
        
        return false;
    }

    public function hasThisPost($id)
    {
        $post_owner_id = Post::find($id)->user_id;

        if ($this->id != $post_owner_id) {
            return false;
        }

        return true;
    }
}
