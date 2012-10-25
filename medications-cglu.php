<!-- This doesn't work (yet) -->

<?php
    include_once('header.php');
?>

<div class="foo">
    <table class="meds">
    <?
        $result = $mysqli->query("SELECT * FROM " + $mysql_database);
        while ($row = $result->fetch_assoc()) { ?>
        	<tr>
	        	<td><? echo $row['medId']; ?></td>
    	    	<td>
        			<label for="flip-1">Flip switch:</label>
					<select name="flip-1" id="flip-1" data-role="slider">
						<option value="off">Off</option>
						<option value="on">On</option>
					</select> 
        		</td>
        	</tr>
        <? }
    ?>
    </table>
</div>