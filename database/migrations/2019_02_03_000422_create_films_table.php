<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
		$table->increments('id');
		$table->unsignedInteger('user_id');
		$table->string('name')->nullable(false)->change();
		$table->text('description')->nullable(false)->change();
		$table->date('release_date')->nullable(false)->change();
		$table->integer('rating')->nullable(false)->change();
		$table->string('ticket_price')->nullable(false)->change();
		$table->string('country')->nullable(false)->change();
		$table->string('genre')->nullable(false)->change();
		$table->string('photo')->nullable(false)->change();
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
        Schema::dropIfExists('films');
    }
}
