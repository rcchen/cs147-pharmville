<? include_once('header.php'); ?>
<? 
	$medId = $_GET['id'];
	$result = $mysqli->query("SELECT * FROM md_users_alerts WHERE alertMed=$medId");
	
	$medResult = $mysqli->query("SELECT * FROM md_medicationdata WHERE mdataId=$medId");
	$medRow = $medResult->fetch_assoc();
?>

<div data-role="page">
	<div data-role="header">
		<a data-icon="arrow-l" data-mini="true" data-transition="slide" data-direction="reverse" href="library.php">Back</a>
		<h1><? echo $medRow['mdataBrand']; ?></h1>
	</div><!-- /header -->
	<ul data-role="listview">
		<? while ($row = $result->fetch_assoc()) { ?>
		<li>
			<a href="edit-medication.php?id=<? echo $medId?>" data-rel="dialog"><? echo $row['alertTime'] ?></a>
		</li>
    <? } ?>
    </ul>
	</div><!-- /content -->
<? include_once('footer.php'); ?>