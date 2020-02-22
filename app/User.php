<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'role',
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

    /**
     * This method get all factures of the current user
     * 
     * @return Facture collections 
     */
    public function factures() 
    {
        return $this->hasMany('App\Facture');
    }

    /**
     * This method get all commandes of the current user
     * 
     * @return Commande collections 
     */
    public function commandes() 
    {
        return $this->hasMany('App\Commande');
    }

    /**
     * This method get all actions of the current user
     * 
     * @return Actions collections 
     */
    public function actions() 
    {
        return $this->hasMany('App\Actions');
    }
}
