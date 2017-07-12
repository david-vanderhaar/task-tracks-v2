$(document).ready(function() {
    $('select').material_select();
  });

//For Task Description Input
 $('#task_desc').trigger('autoresize');

 //For Date and Time Inputs
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
        
  $('.timepicker').pickatime({
    default: 'now', // Set default time
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: true, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: true, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker  
  });

//Combine Date and Time into hidden fields task_start and task_end
  
	//Grab values fields of task_start and task_end
	var taskStartVal = $('#task_start');
	var taskEndVal = $('#task_end');

	$('#start_date, #end_date, #start_time, #end_time').change(function () {
		//Grab values of dates and times
		taskStartVal[0].value = $('#start_date').val() + ' ' + $('#start_time').val();
		taskEndVal[0].value = $('#end_date').val() + ' ' + $('#end_time').val();
		console.log(taskStartVal + '||' + taskEndVal);
	});



