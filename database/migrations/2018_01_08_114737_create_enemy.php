<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnemy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enemy', function (Blueprint $table) {
            $table->increments('id');
			$table->string('ship_type',40);
			$table->string('class',40);
			$table->string('type',40);
            $table->integer('hp');
            $table->integer('armor');
            $table->integer('firepower');
            $table->integer('torpedo');
            $table->integer('AA');
            $table->integer('ASW');
            $table->integer('LOS');
            $table->integer('air_power');
            $table->integer('luck');
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
        Schema::dropIfExists('enemy');
    }
}
