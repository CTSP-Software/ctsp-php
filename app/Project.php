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

    protected $table = 'projects';
}