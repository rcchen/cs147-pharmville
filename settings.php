<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Settings</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="sp-settings">
		<? if ($_SESSION['id'] != null) { ?>
		<ul data-role="listview" data-inset="true">
			<li><a href="#">My Password</a></li>
			<li><a href="#">My Email Address</a></li>
			<li><a href="#">Export Information</a></li>
			<li><a href="#">Vibrate Mode</a></li>
			<li><a href="#">Sounds</a></li>
			<li><a href="#">Sign out</a></li>
		</ul>
		<p><? echo $_SESSION['email']; ?></p>
		<? } else { ?>
		<p>Please login to edit your settings and access personalized information.</p>
		<form>	<!-- TODO: Javascript to prevent default action -->
			<input type="text" name="userEmail" id="basic" placeholder="email" value=""  />
			<input type="password" name="userPassword" id="basic" placeholder="password" value="" />
			<input type="submit" value="submit" />
		</form>
		<p>Don't have an account? <a href="register.php">Register now.</a></p>
		<? } ?>
	</div><!-- /content -->

	<div data-role="footer" id="footer-id" data-id="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
			<ul>
				<li><a href="index.php" data-icon="home-footer"></a></li>
				<li><a href="medications.php" data-icon="med-footer"></a></li>
				<li><a href="library.php" data-icon="cabinet-footer"></a></li>
				<li><a href="settings.php" data-icon="settings-footer" class="ui-btn-active ui-state-persist"></a></li>
			</ul>
		</div>
	</div>

</div><!-- /page -->
