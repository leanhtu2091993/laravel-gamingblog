<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('user_address', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('address', 50);
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
		Schema::dropIfExists('user_address');
    }
}
