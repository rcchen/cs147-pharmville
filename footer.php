<!--<div data-role="footer" id="footer-id" data-id="footer" data-position="fixed" data-theme="b">
	<div data-role="navbar" data-theme="b">
		<ul>
			<li><a href="index.php" data-icon="house-footer"></a></li>
			<li><a href="medications.php" data-icon="med-footer"></a></li>
			<li><a href="library.php" data-icon="cabinet-footer"></a></li>
			<li><a href="settings.php" data-icon="settings-footer"></a></li>
		</ul>
	</div>
</div>

</body>
<script>
	$('.footer-icon').click(function() {
		$.get($(this).attr('id') + '.php', function(data) {
			console.log(data);
		});
	});
	$(document).delegate('.ui-page', 'pageshow', function () {
		console.log('triggered');
		var curPage = $('.sp-content').attr('id');
		$('.footer-icon').each(function() {
			console.log($(this).attr('id') + curPage);
			if ($(this).attr('id').indexOf(curPage) != -1) {
				$(this).append('<div class="footer-icon-selected"></div>');
			}
		});
	});
</script>
</div>
</html>-->