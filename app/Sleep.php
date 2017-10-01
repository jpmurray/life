<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sleep extends Model
{
    protected $fillable = [
        'date', 'energyAtNight', 'anxietyLevel', 'timesAwaken', 'energyInMorning', 'dreams',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
