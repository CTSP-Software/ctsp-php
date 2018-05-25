<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'birth_date',
        'abillity',
        'tel'
    ];

    /*protected $dates = [
        'started_date',
        'end_date'
    ];

    protected $dateFormat = 'm-d-Y';*/

    protected $table = 'users';
}
