<?php
    include_once('header.php');
?>

<body>
<div class="foo">
    <?
        $result = $mysqli->query("SELECT * FROM md_medicationdata");
        while ($row = $result->fetch_assoc()) { ?>
        	<div class="book">
        		<div class="book-title"><? echo $row['mdataBrand']; ?></div>
        		<div class="book-author"><? echo $row['mdataName']; ?></div>
        	</div>
        <? }
    ?>
</div>
</body>
