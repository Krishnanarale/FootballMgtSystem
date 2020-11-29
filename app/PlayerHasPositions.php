<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerHasPositions extends Model
{
    //
    protected $guarded = [];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function  position(){
        return $this->belongsTo(Position::class);
    }
}
