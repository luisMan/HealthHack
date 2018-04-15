<?php
include_once __DIR__ .'/function.php';

?>
<!DOCTYPE html>

<html>
<head>
	<title>Health Hack</title>


	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="doctorPage.css">

	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

</head>
<body>

	<nav class="navbar navbar-default">

  		<div class="container">
	   
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      
		      <p>Health Hacks</p>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse">

				<form class="navbar-form navbar-left">

			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			          <button type="button" class="btn btn-primary">Go</button>
			        </div>
			    </form>
			      
			      <!-- DOCTORS EMAIL -->
			      <!-- GET IT FROM THE LOGIN -->

		    </div>

  		</div>
	</nav>

	<div class="container">

		<div class="patient-Name">
			<!-- LABEL THAT SHOWS THE PATIENT NAME -->
			<label>Starlyn Urena Ventura</label>
		</div>

		<div class="row1-col1">
			
			<!-- PATIENT DATA INFO DIV -->
			<div class="patient-Data">
				<div>
					<p class="pi-p">Patient Info</p>
					<!-- TABLE FOR PATIENT INFORMATIONS -->
					<table>
				        <tr>
				        	<td class="col1"><p>Age</p></td>
				        	<td></td>
				        </tr>
				        <tr>
				        	<td class="col1"><p>Height</p></td>
				        	<td></td>
				        </tr>
				        <tr>
				        	<td class="col1"><p>Weight</p></td>
				        	<td></td>
				        </tr>
				        <tr>
				        	<td class="col1"><p>Gender</p></td>
				        	<td></td>
				        </tr>
				        <tr>
				        	<td class="col1"><p>Heart Rate</p></td>
				        	<td></td>
				        </tr>
				        <tr>
				        	<td class="col1"><p>Body Temerature</p></td>
				        	<td></td>
				        </tr>
							
				    </table>      
				</div>
			</div>

		</div>

		<div class="row1-col2">
			
			<!-- DISEASE RISK BASE ON THE DATA -->
			<div class="disease-Risk">
				<div>
					<p>Diseases Risk</p>
				</div>
			</div>
		</div>

		<div class="row2">
			<div class="doctor-Log">
				<div>
					<p class="pv-p">Patient Visits</p>
					<!-- TABLE FOR THE PATIENT VISIT -->
					<table>
						<tr class="pv-row-static">
							<th>Date</th>							
							<th>Address</th>
							<th>Zip</th>
							<th>State</th>
						</tr>
					</table>

					<div class="scroll">
						<table>
							<tr>
								<th>af</th>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
								
							</tr>
							<tr>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
								<th>asf</th>
							</tr>
							<tr>
								<th>af</th>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
							</tr>
							<tr>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
								<th>asf</th>
							</tr>
							<tr>
								<th>af</th>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
								
							</tr>
							<tr>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
								<th>asf</th>
							</tr>
							<tr>
								<th>af</th>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
							</tr>
							<tr>
								<th>asf</th>
								<th>asf</th>
								<th>af</th>
								<th>asf</th>
							</tr>
						</table>
					</div>
				</div>
			</div>

		</div>

		<div class="row3">
			<div class="risk-Prevention">
				<div>
					<p>Activities to Prevent Disease</p>
					<button type="button" class="btn btn-primary">Send</button>
				</div>
			</div>
		</div>

	</div>



</body>
</html>