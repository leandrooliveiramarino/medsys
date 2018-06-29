<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * Retorna muitos agendamentos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'user_id');
    }

    public function patients()
    {
        return $this->hasMany('App\Patient', 'user_id');
    }

    public function doctors()
    {
        return $this->hasMany('App\Doctor', 'user_id');
    }
}
