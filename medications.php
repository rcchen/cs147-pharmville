<? include_once('header.php'); ?>
<div id="medications" class="content">
	<div id="medications-container" class="container">
		<div id="medications-title">Just a couple of medications. These are being pulled from mySQL md_medicationdata table.</div>
		<?
			$result = $mysqli->query("SELECT * FROM md_medicationdata LIMIT 3");
			while ($row = $result->fetch_assoc()) {?>
				<div class="medication">
					<div class="medication-brand"><? echo $row['mdataBrand']; ?></div>
					<div class="medication-description"><? echo $row['mdataCategory']; ?></div>
				</div>
			<?}
		?>
	</div>
</div>
<? include_once('footer.php'); ?>