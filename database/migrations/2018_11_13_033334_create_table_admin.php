<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('admin', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username', 50);
			$table->string('email', 50);
			$table->string('password');
			$table->string('phone');
			$table->string('address');
			$table->tinyInteger('role');
			$table->tinyInteger('deleted');
			$table->string('created_by', 20);
			$table->string('updated_by', 20);
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
		Schema::dropIfExists('admin');
    }
}
