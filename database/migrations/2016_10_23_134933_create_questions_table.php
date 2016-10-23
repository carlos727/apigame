<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function (Blueprint $table) {
			$table->increments('id');
			$table->string('subject');
			$table->integer('time');
			$table->integer('complexity');
			$table->string('statement');
			$table->string('opA');
			$table->string('opB');
			$table->string('opC');
			$table->string('opD');
			$table->char('opOK');
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
		Schema::dropIfExists('questions');
	}
}
