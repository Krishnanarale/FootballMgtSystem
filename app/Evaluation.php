<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //
    protected $guarded = [];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
