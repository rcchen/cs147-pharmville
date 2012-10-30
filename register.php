<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<a href="settings.php" data-icon="arrow-l" data-transition="slide" data-direction="reverse">Cancel</a>
		<h1>Register</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="settings">	
		<p>Just two quick fields, and you'll be using this app to track your medications!</p>
		<input type="text" name="userEmail" id="basic" placeholder="email" value=""  />
		<input type="password" name="userPassword" id="basic" placeholder="password" value="" />
		<input type="submit" value="register" />
	</div><!-- /content -->
<? include_once('footer.php'); ?>