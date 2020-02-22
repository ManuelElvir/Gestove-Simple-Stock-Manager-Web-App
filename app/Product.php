<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = 'products';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'slug', 'format', 'prix', 'unites', 'qte_shop', 'qte_store', 'qte_fin_shop', 'qte_fin_store', 'perimeal_date',
    ];

    /**
     * This method get all facture with this product
     * 
     * @return Facture collections 
     */
    public function factures() 
    {
        return $this->belongsToMany('App\Facture');
    }

    /**
     * This method get all commande with this product
     * 
     * @return Commande collections 
     */
    public function commandes() 
    {
        return $this->belongsToMany('App\Commande');
    }

    /**
     * This method get all actions do for this product
     * 
     * @return Action collections 
     */
    public function actions() 
    {
        return $this->hasMany('App\Action');
    }
}