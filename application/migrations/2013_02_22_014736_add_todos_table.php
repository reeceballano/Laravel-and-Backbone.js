<?php

class Add_Todos_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('todos')->insert( array(
			'title'=>'Go To Mall',
			'completed'=>'no',
			
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}