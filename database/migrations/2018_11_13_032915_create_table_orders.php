<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('user_address_id');
			$table->string('order_method');
			$table->dateTime('order_date');
			$table->tinyInteger('status');
			$table->string('comment');
			$table->dateTime('shipped_date');
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
		Schema::dropIfExists('orders');
    }
}
