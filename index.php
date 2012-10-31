<? include_once('header.php'); ?>
<?php
#Need to specify that this is an XML document in order for it to work with AJAX
header('Content-Type: text/xml');

#Set variables equal to each part of the date and time
$year = date("Y"); 
$mon = date("m");
$mday = date("d");
$hour = date("H");
$min = date("i");
$sec = date("s");

#Create the XML document of the current date and time
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<currentDateTime>' . "\n";
echo "\t" . '<year>' . $year . '</year>' . "\n";
echo "\t" . '<month>' . $mon . '</month>' . "\n";
echo "\t" . '<day>' . $mday . '</day>' . "\n";
echo "\t" . '<hour>' . $hour . '</hour>' . "\n";
echo "\t" . '<min>' . $min . '</min>' . "\n";
echo "\t" . '<sec>' . $sec . '</sec>' . "\n";
echo '</currentDateTime>' . "\n";
?>
				
<script language="JavaScript">
<!--
//Once the document is loaded, execute the showCurrentTIme function
//This is the AJAX function that displays the current time on the screen.
$(document).ready(function(){ showCurrentTime(); });	

function showCurrentTime() {
	//Call the current time web service,
	//grab the time off the server, and apply it to the 
	//end-user client after waiting for the document to load
	$(document).ready(function() {

		//Make the call to the XML web service
		$.get("currentDateTime.php", function(currentDateTime) {

			//Format the time returned by the server
			var time = [ $("hour", currentDateTime).text(), 
			":", 
			$("min", currentDateTime).text() ];

			//Determine how many milliseconds to will wait until 
			//the time needs to be refreshed again
			var refresh = [(60 - $("sec", currentDateTime).text()) * 1000 ];

			//Display the time on the end-user client
			$("#currentTime").html(time.join(''));

			//Set a timer so that the time on the end-user client updates 
			// in sync with the server time to display the true current time
			setTimeout('showCurrentTime()', refresh);
		});
	});
}
-->
</script>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Welcome Home!</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="home">
		<div class="sp-circle-small">Tylenol</div>
		<div class="sp-circle-med">Zocor</div>
		<div class="sp-circle-main"><p id="currentTime">--:--</p>
		</div>
		<div class="sp-circle-med">Zoloft</div>
		<div class="sp-circle-small">Vicodin</div>
		</div>	
	</div><!-- /content -->
<? include_once('footer.php'); ?>