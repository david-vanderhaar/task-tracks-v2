<h1>Task Form</h1>
	<form class="col s12 col m8 offset-m2 main-form" method="post" action="/tasks">
	<!-- Encrypt -->
	{{ csrf_field() }}
      <div class="row">
      <!-- Input New Task Name -->
        <div class="input-field col s6">
          <input id="new_task_input" type="text" class="validate" name="task_name" required>
          <label for="new_task_input">Task Name</label>
        </div>
        <!-- Select Category For New Task -->
        <div class="input-field col s6">
           <select id="category_select_input" name="category_id">
		      <option value="" disabled selected>Choose a Category</option>
		      @foreach ($categories as $category)
		      <option value="{{$category['id']}}">{{$category['category_name']}}</option>
		      @endforeach
		      <option value="" disabled>Add/Remove Categories</option>
		    </select>
		    <label for="categoy_select_input">Category</label>
        </div>
      </div>
      <div class="row">
        <!-- Input Task Description -->
        <div class="input-field col s12">
          <textarea id="task_desc" type="text" class="materialize-textarea validate" name="task_desc"></textarea>
          <label for="task_desc">Describe your task</label>
        </div>
      </div>
      <div class="row">
      <!-- Input Task Start Time and Date -->
        <div class="input-field col s6">
			<input value="{{$currentDate}}" type="date" class="datepicker" id="start_date" name="start_date" required>
        	<label for="start_date">Start Date</label>
        </div>
        <div class="input-field col s6">
			<input value="{{$currentTime}}" type="text" class="timepicker" id="start_time" name="start_time" required>			
        	<label for="start_time">Start Time</label>
        </div>
      </div>
      <div class="row">
      <!-- Input Task End Time and Date (If not using task timer) -->
        <div class="input-field col s6">
			<input value="{{$currentDate}}" type="date" class="datepicker" id="end_date" name="end_date">
        	<label for="end_date">End Date</label>
        </div>
        <div class="input-field col s6">
			<input type="text" class="timepicker" id="end_time" name="end_time">
        	<label for="end_time">End Time</label>
			<!-- Hidden Input to combine start date and time then send to task controller -->
        	<input type="text" id="task_start" name="task_start" hidden>

        	<!-- Hidden Input to combine end date and time then send to task controller -->
			<input type="text" id="task_end" name="task_end" hidden>

			<!-- Hidden Input to hold calculated duration NOT IN USE-->
			<input type="decimal" id="task_dur" name="task_dur" hidden>
        </div>
      </div>
      <div class="row">
      <!-- Submit the New Task -->
        <div class="col s6 offset-s3">
          <button class="btn waves-effect waves-light" type="submit">Add/Start Task</button>
        </div>
      </div>
    </form>

