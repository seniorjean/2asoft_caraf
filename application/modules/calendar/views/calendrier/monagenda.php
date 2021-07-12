


<section id="containt">
  <section class="">
      <!-- page start-->
      <div class="row">
        <div class="col-sm-12">
      		<section class="panel">
      			<header class="panel-heading">
          			<i class="fa fa-users"></i> Agenda
			          <a href="<?= bs('users/print_with_dompdf') ?>">
						 
					  </a>
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
      			</header>
      		<div class="panel-body">
      			<div class="table-responsive">
                                <div class="">

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