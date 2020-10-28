<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $guarded = [];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
