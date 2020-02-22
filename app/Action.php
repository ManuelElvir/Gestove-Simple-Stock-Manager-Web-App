<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'actions';

    /**
     * The attributes that are mass assignable.
     *  have nothing because is a database trigger who edit this table
     * @var array
     */
    protected $fillable = [];

    /**
     * This method get user who do action
     * 
     * @return User
     */
	public function user() 
	{
		return $this->belongsTo('App\User');
    }

    /**
     * This method get facture of the action
     * 
     * @return Facture
     */
	public function facture() 
	{
		return $this->belongsTo('App\Facture');
    }

    /**
     * This method get commande of the action
     * 
     * @return Commande
     */
	public function commande() 
	{
		return $this->belongsTo('App\Commande');
    }

    /**
     * This method get product of the action
     * 
     * @return Product
     */
	public function product() 
	{
		return $this->belongsTo('App\Product');
    }
}
