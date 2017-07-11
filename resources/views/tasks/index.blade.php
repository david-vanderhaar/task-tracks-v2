<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tasks</title>
	<!-- JQuery 3.2.1 -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Using Google's Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
</head>
<body>
	<div class="container">
		<div class="row">@include('tasks.components.newTaskForm')</div>
		<div class="row">@include('tasks.components.newCategoryForm')</div>
		<div class="row">@include('tasks.components.taskList')</div>
	</div>
</body>
</html>