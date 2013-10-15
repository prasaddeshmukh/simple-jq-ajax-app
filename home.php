<?php

include_once 'config.php';
	echo "<script type='text/javascript' src='ajax.js'></script>";

	$query = "Select id from studinfo";
	$result = mysqli_query($conn, $query);
	echo '<select name="q" id="selectid" onchange="getInfo(this.value)">';
	echo '<option value="">Select ID</option>';
	while($row = mysqli_fetch_assoc($result)) {
			echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';	
		}
	echo '</select>'	;
	echo '<br>';
?>
	
<div id="studinfo" style="padding-top:30"> </div>