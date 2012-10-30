<? include_once('header.php'); ?>
<? 
	$mdataId = $_GET['id'];
	$result = $mysqli->query("SELECT * FROM md_medicationdata WHERE mdataId=$mdataId");
	$row = $result->fetch_assoc();
?>
<div data-role="page">
	<div data-role="header">
		<a data-icon="arrow-l" data-mini="true" data-transition="slide" data-direction="reverse" href="library.php">Back</a>
		<h1><? echo $row['mdataBrand']; ?></h1>
		<a data-icon="gear" data-mini="true" href="#">Edit</a>
	</div><!-- /header -->
	<div data-role="content" class="sp-content" id="library">
		<p>Also known as <? echo $row['mdataName']; ?></p>
		<p>Category: <? echo $row['mdataCategory']; ?></p>
		Side effects
		<ul>
			<?
			$sideEffects = explode(',', $row['mdataSideEffects']);
			foreach ($sideEffects as $effect) {?>
				<li><? echo $effect; ?></li>
			<?}?>
		</ul>
	</div><!-- /content -->
<? include_once('footer.php'); ?>
<script>
	$('#add-med-button').click(function() {
		alert('Not implemented yet!');
	});
</script>