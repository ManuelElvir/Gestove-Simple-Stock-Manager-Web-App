<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    
    protected $table = 'factures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ref', 'client', 'remise', 'prix', 'file_path', 'user_id',
    ];

    /**
     * This method get user of the facture
     * 
     * @return User
     */
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
