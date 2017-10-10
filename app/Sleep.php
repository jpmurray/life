<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sleep extends Model
{
    protected $fillable = [
        'date', 'energyAtNight', 'anxietyLevel', 'timesAwaken', 'energyInMorning', 'sleeps', 'tookAnxieryPill', 'hadAlcool', 'dreams',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
