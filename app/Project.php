<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'id',
        'name',
        'started_date',
        'end_date'
    ];

    /*protected $dates = [
        'started_date',
        'end_date'
    ];

    protected $dateFormat = 'm-d-Y';*/

    protected $table = 'projects';
}
