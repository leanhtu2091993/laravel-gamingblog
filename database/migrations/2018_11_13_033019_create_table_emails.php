<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEmails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('emails', function(Blueprint $table) {
			$table->increments('id');
			$table->string('from', 50);
			$table->string('to', 50);
			$table->text('content');
			$table->integer('type');
			$table->string('subject');
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
		Schema::dropIfExists('emails');
    }
}
