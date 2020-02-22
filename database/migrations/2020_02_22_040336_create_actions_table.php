<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100); //Creation produit
            $table->string('value'); //Modification du produit Vinto {nom = vinto, qte = 20} pour {nom = vinto 100ml, qte = 12}
            $table->string('type',10); // create|update|delete|add|remove
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->bigInteger('facture_id')->unsigned();
            $table->bigInteger('commande_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');


			$table->foreign('facture_id')->references('id')->on('factures')
					->onDelete('restrict')
					->onUpdate('restrict');
            
			$table->foreign('commande_id')->references('id')->on('commandes')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');

            $table->foreign('product_id')->references('id')->on('products')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actions', function(Blueprint $table) {
			$table->dropForeign('actions_facture_id_foreign');
			$table->dropForeign('actions_product_id_foreign');
			$table->dropForeign('actions_user_id_foreign');
			$table->dropForeign('actions_commande_id_foreign');
		});
        Schema::dropIfExists('actions');
    }
}
