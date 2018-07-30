<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Papeis extends Model
{
    protected $fillable = [
        'id',
        'sm_id',
        'po_id',
        'project_id',
    ];

    protected $table = 'papeis';

    public function sm_user()
    {
        return $this->belongsTo(User::class, 'sm_id');
    }

    public function po_user()
    {
        return $this->belongsTo(User::class, 'po_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
