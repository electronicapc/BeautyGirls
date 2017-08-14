<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddValueToGirlstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('girls', function (Blueprint $table) {
    		$table->integer('v_one_h')->nullable();
    		$table->integer('v_two_h')->nullable();
    		$table->integer('v_three_h')->nullable();
    		$table->integer('v_fds')->nullable();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('girls', function (Blueprint $table) {
    		$table->dropColumn('v_one_h');
    		$table->dropColumn('v_two_h');
    		$table->dropColumn('v_three_h');
    		$table->dropColumn('v_fds');
    	});
    }
}
