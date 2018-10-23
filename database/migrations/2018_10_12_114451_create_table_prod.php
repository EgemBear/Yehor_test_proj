<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('text');
            $table->float ('price');
            $table->text('path_photo');
            $table->timestamps();
        });

        Schema::create('photo', function (Blueprint $table) {
            $table->increments('id');
            $table->text('path');
            $table->integer('prod_id')->unsigned();
            $table->foreign('prod_id')
                ->references('id')->on('production')
                ->onDelete('cascade')
                ->onUpdate('restrict');
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
        Schema::drop('production');
        Schema::drop('photo');
    }
}
