<?php

$events = EventData::getEvery();
foreach($events as $evento){

	$thejson[] = array("title"=>$evento->title,"url"=>"./?view=editreservation&id=".$evento->id,"start"=>$evento->date_at."T".$evento->time_at);

}
// print_r(json_encode($thejson));

?>
<script>


	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: new Date(),
			editable: false,
			eventLimit: true, // permitir el enlace "más" cuando hay demasiados eventos
			events: <?php echo json_encode($thejson); ?>
		});
		
	});

</script>


<div class="row">
<div class="col-md-12">
<h1>Calendario</h1>
<div id="calendar"></div>

</div>
</div>
