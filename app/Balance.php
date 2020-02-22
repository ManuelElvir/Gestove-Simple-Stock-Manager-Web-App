<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $table = 'balance';

    /**
     * The attributes that are mass assignable.
     *  have nothing because is a database trigger who edit this table
     * @var array
     */
    protected $fillable = [];
}
