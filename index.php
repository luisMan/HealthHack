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
   <input id="search" type="text" name="patient_name">
   <input id="find_patient" type="button" value="Search">
</div>
<div id ="db_content">
<table id="tData">
	<thead><th colspan="2">Patient Data </thead>
	<tbody>
		<tr>
			<td id="patient_data">
			<span style="float: center">Patient Data</span>
			</td>
			<td id="patient_related_cause_decease">
				<span style="float: center">Deceases</span>
			</td>
		</tr> 
		<tr>
		    <td colspan="" rowspan="" headers="Doctor Loggs"  id="doctor_loggs">
		    	<span style="margin-top: 0px; float: center">Doctor Loggs</span>
		    
		    </td>
		    <td colspan="" rowspan="" headers=""  id="patient_health_risk">
		    	<span style="float: center">Patient BMI Risk</span>
		    </td>
		</tr>
	</tbody>
</table>
	
</div>
</div>
</body>
<script src="js/script.js" type="text/javascript" charset="utf-8"></script>
</html>

