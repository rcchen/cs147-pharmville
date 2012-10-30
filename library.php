<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Library</h1>
		<a href="#" data-role="button" data-icon="refresh" data-iconpos="notext" class="ui-btn-right" id="refresh-library">Refresh</a>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="library">	
		<ul data-role="listview">
		<? $result = $mysqli->query("SELECT * FROM md_medicationdata");
		while ($row = $result->fetch_assoc()) { ?>
			<li>
				<a data-transition="slide" href="medication.php?id=<? echo $row['mdataId']; ?>"><? echo $row['mdataBrand']; ?></a>
			</li>
		<? } ?>
		</ul>
	</div><!-- /content -->
	<script>
		$('#refresh-library').click(function() {
			location.reload();
		});
	</script>
<? include_once('footer.php'); ?>