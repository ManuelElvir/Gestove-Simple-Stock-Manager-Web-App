<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->String('name',100);
            $table->String('slug',100)->unique();
            $table->String('format',15);
            $table->integer('prix');
            $table->integer('unites');
            $table->integer('qte_shop');
            $table->integer('qte_store');
            $table->integer('qte_fin_shop');
            $table->integer('qte_fin_store');
            $table->date('perimeal_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
