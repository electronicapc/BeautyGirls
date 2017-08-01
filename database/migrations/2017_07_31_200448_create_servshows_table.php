<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServshowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servshows', function (Blueprint $table) {
            $table->integer('idGirl');
            $table->integer('idService');
            $table->foreign('idGirl')
            ->references('id')->on('girls')
            ->onDelete('cascade');
            $table->foreign('idService')
            ->references('id')->on('services')
            ->onDelete('cascade');
            $table->primary(['idGirl', 'idService']);
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
        Schema::dropIfExists('servshows');
    }
}
