<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('produtos')) {
            Schema::create('produtos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('CDPRODUTO', 100)->unique();
                $table->string('NMPRODUTO', 100);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('vendas')) {
            Schema::create('vendas', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('CDCLIENTE');
                $table->string('CDVENDA',100)->unique();
                $table->string('TOTALVENDA',100);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('itemvenda')) {
            Schema::create('itemvenda', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('CDVENDA');
                $table->string( 'CDPRODUTO', 100)->unique();
                $table->integer('QTDPRODUTO');
                $table->timestamps();
            });
        }
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
