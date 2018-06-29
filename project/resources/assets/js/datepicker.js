require('bootstrap-datepicker');

//Schedules page
$(document).ready(function(){
    $('#schedule_date').datepicker({
        format: 'dd/mm/yyyy',
        language: 'pt-BR'
    });
});