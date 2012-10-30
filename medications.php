<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Medications</h1>
		<a href="#" data-icon="plus" data-mini="true" class="ui-btn-right" data-iconpos="notext"></a>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="med">	
		<ul data-role="listview">
		<? $result = $mysqli->query("SELECT * FROM md_medicationdata");
		while ($row = $result->fetch_assoc()) { ?>
			<li>
				<a data-transition="slide" href="medication.php?id=<? echo $row['mdataId']; ?>"><? echo $row['mdataBrand']; ?></a>
			</li>
		<? } ?>
		</ul>
	</div><!-- /content -->
<? include_once('footer.php'); ?>