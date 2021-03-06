<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public function game() {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function reviews() {
        return $this->hasMany(Review::class, 'coach_id', 'coach_id');
    }

    public function ratings() {
        return $this->hasMany(Rating::class, 'coach_id', 'coach_id');
    }
}
