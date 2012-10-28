<? include_once('header.php'); ?>
<div id="medication" class="content">
	<form>
		Choose a medication:
		<select>
			<?
			$result = $mysqli->query("SELECT mdataId, mdataBrand FROM md_medicationdata");
			while ($row = $result->fetch_assoc()) { ?>
				<option value="<? echo $row['mdataId']; ?>"><? echo $row['mdataBrand']; ?></option>
			<? } ?>
		</select>
		
	</form>
	<div style="margin-top: 10px;"><a href="medications.php">click to go back</a></div>
</div>
<? include_once('footer.php'); ?>