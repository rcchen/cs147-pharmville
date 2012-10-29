<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Medications</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="sp-medications">	
		<ul data-role="listview">
		<? $result = $mysqli->query("SELECT * FROM md_medicationdata");
		while ($row = $result->fetch_assoc()) { ?>
			<li>
				<a data-transition="slide" href="medication.php?id=<? echo $row['mdataId']; ?>"><? echo $row['mdataBrand']; ?></a>
			</li>
		<? } ?>
		</ul>
	</div><!-- /content -->
	<div data-role="footer" data-position="fixed" data-tap-toggle="false">
		<div id="index" class="footer-icon">
			<a href="index.php">
			<img src="img/icons/house.png" />
			</a>
		</div>
		<div id="medications" class="footer-icon">
			<a href="medications.php">
			<img src="img/icons/pill.png" />
			</a>
		</div>
		<div id="settings" class="footer-icon">
			<a href="settings.php">
			<img src="img/icons/gears.png" />
			</a>
		</div>
	</div><!-- /footer -->
<? include_once('footer.php'); ?>

<!--<? include_once('header.php'); ?>
<div id="medications" class="content">
	<div id="medications-container" class="container">
		<div id="medications-title">Just a couple of medications. These are being pulled from mySQL md_medicationdata table.</div>
		<a class="button" id="add-med-button" href="add-medication.php">Add New Medication</a>
		<?
			$result = $mysqli->query("SELECT * FROM md_medicationdata");
			while ($row = $result->fetch_assoc()) {?>
				<div class="medication">
					<div class="medication-brand">
						<a href="medication.php?id=<? echo $row['mdataId']; ?>">
						<? echo $row['mdataBrand']; ?></div>
						</a>
					<div class="medication-description"><? echo $row['mdataCategory']; ?></div>
					<div class="medication-alarm">
						<select id="toggleswitch1" data-theme="b" data-role="slider" >
	            			<option value="off">Off</option>
	                		<option value="on">On</option>
	           		 	</select>
					</div>
				</div>
			<?}
		?>
	</div>
</div>
<? include_once('footer.php'); ?>-->