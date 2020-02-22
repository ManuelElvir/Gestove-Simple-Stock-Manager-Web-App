<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    
    protected $table = 'commandes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ref', 'statut', 'file_path', 'user_id',
    ];

	public function user() 
	{
		return $this->belongsTo('App\User');
    }

    /**
     * This method get all actions of the facture
     * 
     * @return Actions collections 
     */
    public function actions() 
    {
        return $this->hasMany('App\Actions');
    }

    /**
     * This method get all products of the facture
     * 
     * @return Product collections 
     */
    public function products()
    {
        return $this->belongsToMany('App\Product');
    } 
}
