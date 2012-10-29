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
		<div id="library" class="footer-icon">
			<a href="library.php">
			<img src="img/icons/cabinet.png" />
			</a>
		</div>
		<div id="settings" class="footer-icon">
			<a href="settings.php">
			<img src="img/icons/gears.png" />
			</a>
		</div>
	</div><!-- /footer -->
<? include_once('footer.php'); ?>