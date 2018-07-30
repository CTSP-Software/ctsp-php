<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papeis_sec extends Model
{
    protected $fillable = [
        'id',
        'function',
        'papeis_id',
        'user_id',
    ];

    protected $table = 'papeis_sec';

    public function papel()
    {
        return $this->belongsTo(Papeis::class, 'papeis_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
