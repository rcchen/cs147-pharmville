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
                <div class="book-description" style="display: none;">
                    <?echo $row['mdataSideEffects']; ?>
                </div>
        	</div>
        <? }
    ?>
</div>
</body>

<script>
    $('.book').click(function() {
        jQuery(this).find('.book-description').slideToggle();
    });
</script>
