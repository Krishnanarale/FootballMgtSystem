<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    public function PlayrePositions() {
        return $this->hasMany(PlayerHasPositions::class);
    }
}
