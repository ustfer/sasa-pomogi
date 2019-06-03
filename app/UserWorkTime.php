<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWorkTime extends Model
{

    protected $fillable = [
        'info',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
