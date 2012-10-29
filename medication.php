<? include_once('header.php'); ?>
<? 
	$mdataId = $_GET['id'];
	$result = $mysqli->query("SELECT * FROM md_medicationdata WHERE mdataId=$mdataId");
	$row = $result->fetch_assoc();
?>
<div data-role="page">
	<div data-role="header">
		<h1><? echo $row['mdataBrand']; ?></h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="sp-home">
		<p>Also known as <? echo $row['mdataName']; ?></p>
		<p>Category: <? echo $row['mdataCategory']; ?></p>
		Side effects
		<ul>
			<?
			$sideEffects = explode(',', $row['mdataSideEffects']);
			foreach ($sideEffects as $effect) {?>
				<li><? echo $effect; ?></li>
			<?}?>
		</ul>
		<a id="add-med-button" data-role="button" href="#">Edit Medication</a>
		<a data-role="button" data-theme="b" data-transition="slide" data-direction="reverse" href="medications.php">Back to medications</a>
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
</div><!-- /page -->
<script>
	$('#add-med-button').click(function() {
		alert('Not implemented yet!');
	});
</script>
<? include_once('footer.php'); ?>


<!--<? include_once('header.php'); ?>
<div id="medication" class="content">
	<div id="medication-container" class="container">
		<? 
			$mdataId = $_GET['id'];
			$result = $mysqli->query("SELECT * FROM md_medicationdata WHERE mdataId=$mdataId");
			$row = $result->fetch_assoc();
		?>
		<div class="medication-title"><? echo $row['mdataBrand']; ?> (<? echo $row['mdataName']; ?>)</div>
		<div class="medication-category"><? echo $row['mdataCategory']; ?></div>
		<div class="medication-sideeffects">
			Side effects
			<ul>
				<?
				$sideEffects = explode(',', $row['mdataSideEffects']);
				foreach ($sideEffects as $effect) {?>
					<li><? echo $effect; ?></li>
				<?}?>
			</ul>
		</div>
		<a class="button" id="add-med-button" href="#">Edit Medication</a>
	</div>
	<a href="medications.php"><img src="img/icons/arrow-left.png" /></a>
</div>
<? include_once('footer.php'); ?>-->