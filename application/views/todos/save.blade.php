<!-DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
</head>
<body>
	<h3>Add new Task</h3>

	@if(Session::has('message'))
		{{ Session::get('message') }}
	@endif

	@if($errors->has())
		{{ $errors->first('title', '<li>:message</li>') }}
		{{ $errors->first('completed', '<li>:message</li>') }}
	@endif

	{{ Form::open('todo/create', 'POST') }}
		{{ Form::label('title', 'Title: ') }} <br />
		{{ Form::text('title', Input::old('title')) }} <br />
		{{ Form::label('completed', 'Completed: ') }} <br />
		{{ Form::text('completed', Input::old('completed')) }} <br />
		{{ Form::submit('Add Task') }}
	{{ Form::close() }}
</body>
</html>