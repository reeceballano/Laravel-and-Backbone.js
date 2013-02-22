<?php

class Todo Extends Eloquent {
	public static $rules = array(
		'title' => 'required'
	);

	public static function validate($inputs) {
		return Validator::make($inputs, static::$rules);
	}
}