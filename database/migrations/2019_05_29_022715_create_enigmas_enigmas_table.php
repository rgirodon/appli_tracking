<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnigmasEnigmasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enigmas_enigmas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->index('fk_enigmas_has_enigmas_enigmas_idx');
            $table->integer('child_id')->unsigned()->index('fk_enigmas_has_enigmas_enigmas1_idx');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('enigmas_enigmas');
    }

}
