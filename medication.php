<? include_once('header.php'); ?>
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
<? include_once('footer.php'); ?>