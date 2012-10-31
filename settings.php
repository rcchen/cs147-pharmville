<? include_once('header.php'); ?>
<div data-role="page">
	<div data-role="header" data-tap-toggle="false">
		<h1>Settings</h1>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="settings">
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
		<form id="login-form">	<!-- TODO: Javascript to prevent default action -->
			<input type="text" name="userEmail" id="userEmail" placeholder="email" value=""  />
			<input type="password" name="userPassword" id="userPassword" placeholder="password" value="" />
			<input type="submit" id="login-submit" value="submit" />
		</form>
		<p>Don't have an account? <a href="register.php" data-transition="slide">Register now.</a></p>
		<div id="login-feedback" class="spring-hide"></div>
		<? } ?>
	</div><!-- /content -->
	<script>

		function onSuccess(data, status) {
			$('#login-feedback').html(data);
			$('#login-feedback').toggleClass('spring-hide');
			if (data.indexOf("Successful login!") != -1) {
				location.reload();	
			}
		}

		function onError(data, status) {
			console.log("Error: " + data + " " + status);
		}

		$('#login-submit').click(function() {
			var formData = $('#login-form').serialize();
			$.ajax({
				type: "POST",
				url: "functions/login-user.php",
				cache: false,
				data: formData,
				success: onSuccess,
				error: onError
			});
			return false;
		});
		
	</script>
<? include_once('footer.php'); ?>