<h1>Task Form</h1>
	<form class="col s12 col m8 offset-m2 main-form" method="get" action="">
      <div class="row">
      <!-- Input New Task Name -->
        <div class="input-field col s6">
          <input id="new_task_input" type="text" class="validate">
          <label for="new_task_input">Task Name</label>
        </div>
        <!-- Select Category For New Task -->
        <div class="input-field col s6">
           <select id="category_select_input">
		      <option value="" disabled selected>Choose a Category</option>
		      <option value="1">Option 1</option>
		      <option value="2">Option 2</option>
		      <option value="3">Option 3</option>
		      <option value="" disabled>Add/Remove Categories</option>
		    </select>
		    <label for="categoy_select_input">Category</label>
        </div>
      </div>
      <div class="row">
        <!-- Input Task Description -->
        <div class="input-field col s12">
          <textarea id="task_desc" type="text" class="materialize-textarea"></textarea>
          <label for="task_desc">Describe your task</label>
        </div>
      </div>
      <div class="row">
      <!-- Input Task Start Time and Date -->
        <div class="input-field col s6">
			<input type="date" class="datepicker" id="start_date">
        	<label for="start_date">Start Date</label>
        </div>
        <div class="input-field col s6">
			<input type="text" class="timepicker" id="start_time">
        	<label for="start_time">Start Time</label>
        </div>
      </div>
      <div class="row">
      <!-- Input Task End Time and Date (If not using task timer) -->
        <div class="input-field col s6">
			<input type="date" class="datepicker" id="end_date">
        	<label for="end_date">End Date</label>
        </div>
        <div class="input-field col s6">
			<input type="text" class="timepicker" id="end_time">
        	<label for="end_time">End Time</label>
        </div>
      </div>
      <div class="row">
      <!-- Submit the New Task -->
        <div class="col s6 offset-s3">
          <button class="btn waves-effect waves-light" type="submit">Add/Start Task</button>
        </div>
      </div>
    </form>

