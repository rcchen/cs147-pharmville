<head>
    <? include_once('config.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/zepto.min.js"></script>
</head>

<!-- BEGIN HEADER -->
<div class="header">
	<div class="header-contents">Pharmville (click to reload)</div>
</div>
<!-- END HEADER -->

<script>
	var header = $('.header-contents')
	header.on('click', function(e) {
		window.location.reload()
	})
</script>