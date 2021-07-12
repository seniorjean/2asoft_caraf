

<link rel="stylesheet" href="<?php echo base_url() ?>public/fullcalendar-3.10.0/fullcalendar.min.css" />
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/lib/moment.min.js"></script>
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/fullcalendar.min.js"></script>
               <script src="<?php echo base_url() ?>public/fullcalendar-3.10.0/gcal.js"></script>
               <script src='<?php echo base_url() ?>public/fullcalendar-3.10.0//locale/fr.js'></script>


<section id="main-content">
  <section class="wrapper">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
      		<section class="panel">
      			<header class="panel-heading">
          			<i class="fa fa-users"></i> Agenda
			          <a href="<?= bs('users/print_with_dompdf') ?>">
						 <i class="fa fa-print" style="padding-left: 1%;color: black"></i>
					  </a>
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
      			</header>
      		<div class="panel-body">
      			<div class="table-responsive">
                                <div class="container">

                    <div class="row">
                    <div class="col-md-12">

                   

                    <div id="calendar">
                    </div>

                    </div>
                    </div>
                    </div>
      	  </div>
      	</div>
      </section>
     </div>
    </div>
      <!-- page end-->
  </section>
</section>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
      </div>
      <div class="modal-body">
      <?php echo form_open(site_url("calendar/add_event"), array("class" => "form-horizontal")) ?>
      <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="name" value="">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Description</label>
                <div class="col-md-8 ui-front">
                    <input type="text" class="form-control" name="description">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
                <div class="col-md-8">
                    <input type="datetime-local" class="form-control" name="start_date">
                </div>
        </div>
        <div class="form-group">
                <label for="p-in" class="col-md-4 label-heading">End Date</label>
                <div class="col-md-8">
                    <input type="datetime-local" class="form-control" name="end_date">
                </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Add Event">
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
   $('#calendar').fullCalendar({
     eventSources: [
         {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>calendar/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             }
         },
     ],dayClick: function(date, jsEvent, view) {
        date_last_clicked = $(this);
        $(this).css('background-color', '#bed7f3');
        $('#addModal').modal();
    },
 });
        

    
});
</script>
<!-- Main Content Ends -->
