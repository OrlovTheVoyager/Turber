<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'languages', 'location', 'date_from', 'date_to', 'text', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
