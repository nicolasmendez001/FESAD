<!DOCTYPE html>
<html>
<head>
    <title>403 Forbidden</title>
<style>
    #calendar{
        width: 50%;
        margin: 0px auto;
    }
</style>


</head>
<body>

<div id='calendar'>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/lib/jquery.min.js"></script>
<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/lib/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/lib/moment.min.js"></script>
<link href="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/fullcalendar.min.css" rel="stylesheet">
<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/fullcalendar.min.js"></script>
<script src="<?= base_url() ?>/resources/plugins/fullcalendar-3.10.0/locale/es.js"></script>

<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            options: {
                locale: 'es'
            },
            events: '<?= site_url("ccalendario/eventos"); ?>',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,bsicWeek, basicDay, agendaWeek,agendaDay'
            },
            dayClick: function(date, jsEvent, view) {

                alert('Clicked on: ' + date.format());

                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                alert('Current view: ' + view.name);

                // change the day's background color just for fun
                $(this).css('background-color', 'red');

            },
        });
    });
</script>
</body>
</html>
