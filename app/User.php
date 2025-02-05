<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',  'is_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($user) {
            if ($user->is_admin != 1)
                $user->uuid = IdGenerator::generate(['table' => $user->table, 'field' => 'uuid', 'length' => 7, 'prefix' =>'PFC']);
        });

        static::created(function ($user) {
            if ($user->is_admin != 1)
                $user->player()->create(['email' => $user->email,]);
        });
    }

    /**
     * Get the profile record associated with the user.
     */
    public function player()
    {
        return $this->hasOne(Player::class);
    }
}
