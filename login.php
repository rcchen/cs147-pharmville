<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Login</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="sp-settings">	
		<input type="text" name="userEmail" id="basic" placeholder="email" value=""  />
		<input type="password" name="userPassword" id="basic" placeholder="password" value="" />
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
		<div id="library" class="footer-icon">
			<a href="library.php">
			<img src="img/icons/cabinet.png" />
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