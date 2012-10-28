<? include_once('header.php'); ?>
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
<? include_once('footer.php'); ?>