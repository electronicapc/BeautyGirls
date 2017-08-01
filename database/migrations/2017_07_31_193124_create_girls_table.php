<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGirlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('girls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('tambus',4);
            $table->string('colpel',15);
            $table->string('colojo',12);
            $table->string('colpil',12);
            $table->string('confis',12);
            $table->integer('tamcin');
            $table->integer('tamcol');
            $table->integer('estat');
            $table->string('vip',2);
            $table->integer('rank');
            //$table->integer('servicios');
            $table->string('activo',2);
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
        Schema::dropIfExists('girls');
    }
}
