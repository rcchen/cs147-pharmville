		<div id="footer">
			<div id="home" class="footer-icon">
				<a href="index.php">
				<img src="img/icons/house.png" />
				</a>
			</div>
			<div id="medications" class="footer-icon">
				<a href="medications.php">
				<img src="img/icons/pill.png" />
				</a>
			</div>
			<div id="settings" class="footer-icon">
				<a href="settings.php">
				<img src="img/icons/gears.png" />
				</a>
			</div>
		</div>
	</body>
	<script>
		$('a').live('click', function(event) {
			event.preventDefault();
			window.location = $(this).attr('href');
		});

		$(document).ready(function() {
			var curPage = $('.content').attr('id');
			$('.footer-icon').each(function() {
				if ($(this).attr('id') == curPage) {
					$(this).append('<div class="footer-icon-selected">');
				}
			});
		});
	</script>
</html>