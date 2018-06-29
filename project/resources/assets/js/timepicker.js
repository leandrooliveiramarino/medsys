require('bootstrap-timepicker');

//Schedules page
$(document).ready(function(){
    $('#schedule_time').timepicker({
        showMeridian: false,
        minuteStep: 1
    });
});