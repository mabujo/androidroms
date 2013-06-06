<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRomsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roms', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('status');
			$table->float('version');
			$table->string('type');
			$table->string('android_version');
			$table->datetime('first_release_date');
			$table->datetime('latest_release_date');
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
        Schema::drop('roms');
    }

}
