<?php

class Todos_Controller Extends Base_Controller {
	public $restful = true;

	public function get_index() {
		return Response::eloquent(Todo::all());
	}

	public function get_add() {
		return View::make('todos.save')
			->with('title', 'Add new Task!');
	}

	public function post_index() {
		$validation = Todo::validate(get_object_vars(Input::json()));
		if($validation->fails()) {
			return Response::json($validation->errors->all(), 400);
		} else {
			$newTodo = Input::json();

			$todo = new Todo();
			$todo->title = $newTodo->title;
			$todo->completed = $newTodo->completed;

			$todo->save();
			return Response::eloquent($todo);
		}
	}

	public function put_index() {
		$validation = Todo::validate(get_object_vars(Input::json()));
		if($validation->fails()) {
			return Response::json($validation->errors->all(), 400);
		} else {
			$updateTodo = Input::json();

			$todo = Todo::find($updateTodo->id);
			$todo->title = $updateTodo->title;
			$todo->completed = $updateTodo->completed;

			$todo->save();
			return Response::eloquent($todo);

		}
	}

	public function delete_index($id = null) {
		$todo = Todo::find($id);
		
		if(!$todo) {
			return Response::json('Todo not found!', 404);
		} else {
			$todo->delete();
			return Response::eloquent($todo);
		}
	}


}