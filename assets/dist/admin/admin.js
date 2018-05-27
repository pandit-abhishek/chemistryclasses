$(document).ready(function(){
	$(function(){
		$( ".datepicker").datepicker({
			yearRange: '1950:+1',
      		changeMonth: true,
      		changeYear: true,
      		dateFormat: "yy-mm-dd"
    	});

	});
});