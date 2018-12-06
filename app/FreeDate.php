<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreeDate extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'user_ids',
    ];
}
