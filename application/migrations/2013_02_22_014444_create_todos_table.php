<?php

class Create_Todos_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todos', function($table)  {
			$table->increments('id', 10);
			$table->string('title');
			$table->string('completed');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todos');
	}

}