<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitator extends Model
{
    //
    protected $fillable = [
        'nama'
    ];

    protected $hidden = [
        'password'
    ];
}
