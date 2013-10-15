<?php
include_once "config.php";

$q = $_GET['q'];

$query = "select * from studinfo where id= $q";
$result = mysqli_query($conn, $query);
	echo '
<table border="1">
<tr>
	<th> ID</th>
	<th> Maths</th>
	<th> Computers</th>
</tr> ';

	while($row = mysqli_fetch_assoc($result)){
		//echo "<h4>maths -> ".$row['maths']."</h4>";// and computers-> ".$row['computer'];
		echo '<tr>
				<td>'.$row['ID'].'</td>
				<td>'.$row['maths'].'</td>
				<td>'.$row['computer'].'</td>
				</tr>';	
			}
echo "</table>";
?>