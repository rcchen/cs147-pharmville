	<div data-role="footer" class="footer" data-id="footer" data-position="fixed" data-theme="b">
		<div data-role="navbar" data-theme="b">
			<ul>
				<li class="footer-icon" id="home-footer"><a href="index.php" data-icon="home-footer" class="ui-btn-active ui-state-persist"></a></li>
				<li class="footer-icon" id="med-footer"><a href="medications.php" data-icon="med-footer"></a></li>
				<li class="footer-icon" id="library-footer"><a href="library.php" data-icon="library-footer"></a></li>
				<li class="footer-icon" id="settings-footer"><a href="settings.php" data-icon="settings-footer"></a></li>
			</ul>
		</div>
	</div>
</div><!-- /page -->
<script>
	/*$(document).delegate('.ui-page', 'pageinit', function () {
		var activePage = $('.ui-page-active');
		activePage.find('span.ui-icon').each(function() {
			$(this).removeClass('ui-icon-shadow');
		});
		activePage.find('.footer-icon').each(function() {
			var curPageLink = $(this).find('a');
			curPageLink.removeClass('ui-btn-active');
			curPageLink.removeClass('ui-state-persist');
		});		
	});*/
	$(document).delegate('.ui-page', 'pagebeforeload', function () {
		console.log('now');
		var activePage = $('.ui-page-active');
		activePage.find('span.ui-icon').each(function() {
			$(this).removeClass('ui-icon-shadow');
		});		
	});
	$(document).delegate('.ui-page', 'pageshow', function () {
		var activePage = $('.ui-page-active');
		var activePageId = activePage.find('.ui-content').attr('id') + '-footer';
		activePage.find('span.ui-icon').each(function() {
			$(this).removeClass('ui-icon-shadow');
		});
		activePage.find('.footer-icon').each(function() {
			var curPageLink = $(this).find('a');
			if ($(this).attr('id') == activePageId) {
				curPageLink.addClass('ui-btn-active');
				curPageLink.addClass('ui-state-persist');
			} else {
				curPageLink.removeClass('ui-btn-active');
				curPageLink.removeClass('ui-state-persist');
			}
		});
	});

			/*$('.footer-icon').each(function() {
			$(this).removeClass('ui-btn-active');
			$(this).removeClass('ui-state-persist');
		});
		console.log('triggered');
		var curPage = $('.sp-content:last').attr('id') + '-footer';
		var curFooter = $('.footer:last .ui-navbar:last .ui-grid-c:last');
		console.log(curFooter);
		curFooter.children('.footer-icon').each(function() {
			if ($(this).attr('id') == curPage) {
				var curPageLink = $(this).find('a');
				curPageLink.addClass('ui-btn-active');
				curPageLink.addClass('ui-state-persist');
				console.log($(this).attr('id') + curPage);
				console.log('classes added');
			}
		});*/
</script>