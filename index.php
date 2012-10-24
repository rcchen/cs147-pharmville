<?php
    include_once('header.php');
?>

<html>
<div class="foo">
    <?
        $result = $mysqli->query("SELECT * FROM books");
        while ($row = $result->fetch_assoc()) { ?>
        	<div class="book">
        		<div class="book-title"><? echo $row['title']; ?></div>
        		<div class="book-author"><? echo $row['author']; ?></div>
        		<div class="book-stock <?
        			if ($row['inventory'] > 0) {
  						printf('book-instock">In stock (%d)', $row['inventory']);
        			} else {
        				echo 'book-nostock">Out of stock';
        			}
        		?></div>
        	</div>
        <? }
    ?>
</div>
</html>