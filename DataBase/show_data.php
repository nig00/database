<?php

$con = mysqli_connect('localhost','test','test1','test');


$sth = mysqli_query($con, "SELECT * FROM home_data ORDER BY uploaded_on DESC");

?>

<table width="100%" border="1">

	<tr>

	<td>temp</td>

	<td>ecg</td>

	<td>hebt</td>

   
    <td>Uploaded on</td>

	</tr>



<?php



while($row = mysqli_fetch_assoc($sth)) {

	?>

	<tr>

		<td><?php echo $row['temp'];?></td>

		<td><?php echo $row['ecg'];?></td>

		<td><?php echo $row['hebt'];?></td>

		

		<td><?php echo $row['uploaded_on'];?></td>

	</tr>

	<?php

}

?>

</table>