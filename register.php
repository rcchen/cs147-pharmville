<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<a href="settings.php" data-icon="arrow-l" data-transition="slide" data-direction="reverse">Cancel</a>
		<h1>Register</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="settings">	
		<p>Just two quick fields, and you'll be using this app to track your medications!</p>
		<form id="register-form">
			<input type="text" name="userEmail" id="basic" placeholder="email" value=""  />
			<input type="password" name="userPassword" id="basic" placeholder="password" value="" />
			<input id="register-submit" type="submit" value="register" />
		</form>
		<div id="register-feedback" class="spring-hide">lol</div>
	</div><!-- /content -->

	<script>
		function onSuccess(data, status) {
			console.log(data);
			$('#register-feedback').html(data);
			$('#register-feedback').toggleClass('spring-hide');
			if (data.indexOf("Success!") != -1)
				window.location.href = 'settings.php';
		}

		$('#register-submit').click(function() {
			var formData = $('#register-form').serialize();
			$.ajax({
				type: "POST",
				url: "functions/register-user.php",
				cache: false,
				data: formData,
				success: onSuccess
			});
			return false;
		});
	</script>

<? include_once('footer.php'); ?>