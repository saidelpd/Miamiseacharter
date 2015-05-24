$(document).ready(function () {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        eventLimit: true,
        events: {
            url: '/appointments/getJson',
            error: function() {
                $('#script-warning').show();
            }
        },
        loading: function(bool) {
            $('#loading').toggle(bool);
        }
    });
    $('#calendar').fullCalendar('changeView','agendaWeek');
});