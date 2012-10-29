<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Settings</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="sp-settings">	
		<ul data-role="listview" data-inset="true">
			<li><a href="#">My Password</a></li>
			<li><a href="#">My Email Address</a></li>
			<li><a href="#">Export Information</a></li>
			<li><a href="#">Vibrate Mode</a></li>
			<li><a href="#">Sounds</a></li>
		</ul>	
	</div><!-- /content -->
	<div data-role="footer" data-position="fixed" data-tap-toggle="false">
		<div id="sp-home" class="footer-icon">
			<a href="index.php">
			<img src="img/icons/house.png" />
			</a>
		</div>
		<div id="sp-medications" class="footer-icon">
			<a href="medications.php">
			<img src="img/icons/pill.png" />
			</a>
		</div>
		<div id="sp-settings" class="footer-icon">
			<a href="settings.php">
			<img src="img/icons/gears.png" />
			</a>
		</div>
	</div><!-- /footer -->
</div><!-- /page -->
<? include_once('footer.php'); ?>