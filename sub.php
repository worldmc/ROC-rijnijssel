<?php

/* ********************************************
 * PHP script geschreven door arjo. 
 * Dit script maakt gebruik van een single page form/processing waardoor alles compact bij elkaar staat. 
 *
 * De output: een txt bestandje per dag, alles in een soort van CSV indeling
 */
if (!empty($_POST)) {
	$myfile = fopen("formdata.txt", "a") or die("Unable to open file!");
	$txt = "" . $_POST['naam'] . "," . $_POST['email'] . "\r\n";
	fwrite($myfile, $txt);
	fclose($myfile);

	header('Location: sub.php');

// een verschil tussen het submitten en het formulier
 } else { 
 ?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		<title>ROC Rijnijssel Engineering</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron" style="text-align:center; margin-top:30px;">
						<h1> ROC Rijnijssel - Engineering</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="" style="text-align: center;">
						<p> Wil je meer informatie ontvangen over de opleiding en op de hoogte blijven van de open dagen en andere activiteiten? Vul dan hieronder je naam en email in!</p>
						<form method="post" action="sub.php">
						  	<label for="naam">Naam:</label>
						  	<input id="naam" type="text" name="naam" placeholder="Vul hier je naam in">
						  	<br>
						  	<label for="email">Email:</label>
						  	<input id="email" type="email" name="email" placeholder="Vul hier je email in">
						  	<br><br>
						  	<input type="submit" value="Submit">
						</form> 
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php } ?>
