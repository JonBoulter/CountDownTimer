<h>Testing</h>
<?php

	//Leave all this stuff as it is
	date_default_timezone_set('Europe/London');
	$time = $_GET['time'];
	$future_date = new DateTime(date('r',strtotime($time)));
	$time_now = time();
	$now = new DateTime(date('r', $time_now));
	$frames = array();	
	$delays = array();

echo $time;

?>
