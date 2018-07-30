<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'project_id',
        'priority',
        'type',
        'estimative',
        'summary'
    ];

    protected $table = 'products';
}
