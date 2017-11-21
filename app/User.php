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
        'name', 'email','lastName', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function r_carros()
      {
        return $this->hasMany('App\Carro', 'user_id', 'id');
      }
    public function r_choferes()
      {
        return $this->hasMany('App\Choferes', 'user_id', 'id');
      }
}
