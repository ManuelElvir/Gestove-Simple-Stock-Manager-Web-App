<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->integer('sale_price');
			$table->integer('qte');
            $table->bigInteger('facture_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();

			$table->foreign('facture_id')->references('id')->on('factures')
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
        Schema::table('facture_product', function(Blueprint $table) {
			$table->dropForeign('facture_product_facture_id_foreign');
			$table->dropForeign('facture_product_product_id_foreign');
		});
        Schema::dropIfExists('facture_product');
    }
}
