<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    protected $guarded = [];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }
}
