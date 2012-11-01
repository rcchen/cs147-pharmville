<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Home</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="home">
		<div class="sp-circle-small"><br><br>Tylenol<br>2:15PM</div>
		<div class="sp-circle-med"><br><br>Zocor<br>1:00PM</div>
		<div class="sp-circle-main">

		<script type="text/javascript">
	<!--
	var currentTime = new Date()
	var hours = currentTime.getHours()
	var minutes = currentTime.getMinutes()
	if (minutes < 10){
	minutes = "0" + minutes
	}
	if(hours >= 13)
		hours = hours - 12;
	document.write(hours + ":" + minutes + " ")
	if(hours > 11){
	document.write("PM")
	} else {
	document.write("AM")
	}
	//-->
	</script>

		</div>
		<div class="sp-circle-med"><br><br>Zoloft<br>11:30AM</div>
		<div class="sp-circle-small"><br><br>Vicodin<br>9:00AM</div>
		</div>	
	</div><!-- /content -->
<? include_once('footer.php'); ?>