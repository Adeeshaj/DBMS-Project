<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAchievementsTable extends Migration {

	public function up()
	{
		Schema::create('achievements', function(Blueprint $table) {
			$table->increments('ach_id');
			$table->integer('act_id')->unsigned(); //foreign keys are updated in foreign key migration file
			$table->integer('stu_id')->unsigned();
			$table->enum('position', array('winner', 'runners_up', 'third_place', 'participation'));
			$table->text('description');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('achievements');
	}
}