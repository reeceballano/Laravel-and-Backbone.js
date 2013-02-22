<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel Todo app with Backbonejs.</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/style.css') }}
</head>
<body>
	<section id="todoapp">

		<header id="header">
			<h1>Laravel todos</h1>
			<input id="new-todo" placeholder="What needs to be done?" autofocus>
		</header>
		<section id="main">
			<input id="toggle-all" type="checkbox">
			<label for="toggle-all">Mark all as complete</label>
			<ul id="todo-list"></ul>
		</section>
		<footer id="footer"></footer>
	</section>

	<div id="info">
		<p>Double-click to edit a todo</p>
		<p>Originally Written by <a href="https://github.com/addyosmani">Addy Osmani</a></p>
	</div>

	<script type="text/template" id="item-template">
		<div class="view">
			<input class="toggle" type="checkbox" <%= (completed == "yes") ? 'checked' : '' %>>
			<label><%- title %></label>
			<button class="destroy"></button>
		</div>
		<input class="edit" value="<%- title %>">
	</script>
	<script type="text/template" id="stats-template">
		<span id="todo-count"><strong><%= remaining %></strong> <%= remaining === 1 ? 'item' : 'items' %> left</span>
		<ul id="filters">
			<li>
				<a class="selected" href="#/">All</a>
			</li>
			<li>
				<a href="#/active">Active</a>
			</li>
			<li>
				<a href="#/completed">Completed</a>
			</li>
		</ul>

		<% if (completed) { %>
		<button id="clear-completed">Clear completed (<%= completed %>)</button>
		<% } %>
	</script>

	{{ HTML::script('js/lib/json2.js') }}
	{{ HTML::script('js/lib/jquery.min.js') }}
	{{ HTML::script('js/lib/underscore.min.js') }}
	{{ HTML::script('js/lib/backbone.min.js') }}
	{{ HTML::script('js/lib/app.js') }}

</body>
</html>
