<? include_once('header.php'); ?>
<? 
	$mdataId = $_GET['id'];
	$result = $mysqli->query("SELECT * FROM md_medicationdata WHERE mdataId=$mdataId");
	$row = $result->fetch_assoc();
?>
<div data-role="page">
	<div data-role="header">
		<a data-icon="arrow-l" data-mini="true" data-transition="slide" data-direction="reverse" href="medications.php">Back</a>
		<h1><? echo $row['mdataBrand']; ?></h1>
		<a data-icon="gear" data-mini="true" href="#">Edit</a>
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
	</div><!-- /content -->

	<div data-role="footer" id="footer-id" data-id="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
			<ul>
				<li><a href="index.php" data-icon="home-footer"></a></li>
				<li><a href="medications.php" data-icon="med-footer" class="ui-btn-active ui-state-persist"></a></li>
				<li><a href="library.php" data-icon="cabinet-footer"></a></li>
				<li><a href="settings.php" data-icon="settings-footer"></a></li>
			</ul>
		</div>
	</div>
	
</div><!-- /page -->
<script>
	$('#add-med-button').click(function() {
		alert('Not implemented yet!');
	});
</script>


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