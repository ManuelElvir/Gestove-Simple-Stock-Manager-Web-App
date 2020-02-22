<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->integer('qte');
            $table->bigInteger('commande_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            
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
        Schema::table('commande_product', function(Blueprint $table) {
			$table->dropForeign('commande_product_commande_id_foreign');
			$table->dropForeign('commande_product_product_id_foreign');
		});
        Schema::dropIfExists('commande_product');
    }
}
