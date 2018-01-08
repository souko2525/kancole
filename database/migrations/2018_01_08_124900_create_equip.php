<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equip', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name',100);
			$table->integer('type_id');
			$table->integer('firepower');
			$table->integer('bomming');
			$table->integer('AA');
			$table->integer('armor');
			$table->integer('ASW');
			$table->integer('accuracy');
			$table->integer('evasion');
			$table->integer('LOS');
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
        Schema::dropIfExists('equip');
    }
}
