<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnemyEquipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enemy_equip', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('enemy_id');
			$table->integer('equip1');
			$table->integer('equip2');
			$table->integer('equip3');
			$table->integer('equip4');
			$table->integer('equip5');
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
        Schema::dropIfExists('enemy_equip');
    }
}
