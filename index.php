<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Home</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="sp-home">	
		<p>Hello world</p>	
		<div class="sp-circle-main">
			<div class="sp-circle-text">Testing</div>
		</div>	
	</div><!-- /content -->
	<div data-role="footer" id="footer-id" data-id="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
			<ul>
				<li><a href="index.php" data-icon="home-footer" class="ui-btn-active ui-state-persist"></a></li>
				<li><a href="medications.php" data-icon="med-footer"></a></li>
				<li><a href="library.php" data-icon="cabinet-footer"></a></li>
				<li><a href="settings.php" data-icon="settings-footer"></a></li>
			</ul>
		</div>
	</div>
</div><!-- /page -->