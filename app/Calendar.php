<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{

    protected $fillable = [
        'task', 'started_on', 'ended_on',
    ];

    protected $dates = [
        'started_on',
        'ended_on',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
