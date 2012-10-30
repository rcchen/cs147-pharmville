<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Library</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="sp-library">	
		<ul data-role="listview">
		<? $result = $mysqli->query("SELECT * FROM md_medicationdata");
		while ($row = $result->fetch_assoc()) { ?>
			<li>
				<a data-transition="slide" href="medication.php?id=<? echo $row['mdataId']; ?>"><? echo $row['mdataBrand']; ?></a>
			</li>
		<? } ?>
		</ul>
	</div><!-- /content -->

	<div data-role="footer" id="footer-id" data-id="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
			<ul>
				<li><a href="index.php" data-icon="home-footer"></a></li>
				<li><a href="medications.php" data-icon="med-footer"></a></li>
				<li><a href="library.php" data-icon="cabinet-footer" class="ui-btn-active ui-state-persist"></a></li>
				<li><a href="settings.php" data-icon="settings-footer"></a></li>
			</ul>
		</div>
	</div>

</div><!-- /page -->