<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tasks</title>
</head>
<body>
	@foreach ($tasks as $task)
		{{ $task['task_name'] }}
	@endforeach
</body>
</html>