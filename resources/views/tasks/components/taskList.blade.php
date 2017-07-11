<h1>Task List</h1>

@foreach ($tasks as $task)
{{ print_r($task['attributes'])}}
@endforeach