<? include_once('header.php'); ?>
<div id="medications" class="content">
	<div id="medications-container" class="container">
		<div id="medications-title">Just a couple of medications. These are being pulled from mySQL md_medicationdata table.</div>
		<a class="button" id="add-med-button" href="add-medication.php">Add New Medication</a>
		<table class="medications-table">
		<?
			$result = $mysqli->query("SELECT * FROM md_medicationdata");
			while ($row = $result->fetch_assoc()) {?>
				<tr class="medication"><td>
				<a href="medication.php?id=<? echo $row['mdataId']; ?>">
					<div class="medication-brand"><? echo $row['mdataBrand']; ?></div>

					<div class="medication-description"><? echo $row['mdataCategory']; ?></div>
				</a>
				</td><td>
				<div class="medication-alarm">
					<select id="toggleswitch1" data-theme="b" data-role="slider" >
            			<option value="off">Off</option>
                		<option value="on">On</option>
           		 	</select>
				</div></td></tr>
			<?}
		?>
		</table>
	</div>
</div>
<? include_once('footer.php'); ?>