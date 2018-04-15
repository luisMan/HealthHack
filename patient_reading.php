<?php
include_once __DIR__ .'/function.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>final project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
	</head>
<body>
<div class="wrapper">
<div id="top_bar">
   <span id="queue">Patient Queue </span>
</div>
<div id ="db_content">
<table>
	<caption>Patient Reading /  Hospital queue data</caption>
	<thead>
		<tr>
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
		    <input id="POST_FAKE_SENSOR" type="button" value="fake data"></input>
			<td id="recent_reading"><?php  $object->getPatient_reading_data(); ?></td>
			<td id="patient_queue"></td>
		</tr>
	</tbody>
</table>

</div>

</div>
</body>

<script src="js/recursive.js" type="text/javascript" charset="utf-8"></script>
<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
</html>

