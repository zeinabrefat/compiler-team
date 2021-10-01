<link rel="stylesheet" type="text/css" href="css/styleSheet.css" >

<?php

	require'header.php';


	$connect = mysqli_connect('localhost', 'root', '');


	mysqli_select_db($connect, 'Product');
	$select = "SELECT * FROM `information of products`";
	$result = mysqli_query($connect, $select);
?>

<table class="table">
	<tr>
		<td>Name</td>
		<td>Number</td>
		<td>Color</td>
	</tr>
</table>
<?php
	while ($ress = mysqli_fetch_assoc($result)) 
	{?>
		<table class="table">
			<tr>
				<td><?php echo $ress['Name'] . " ";?></td>
				<td><?php echo $ress['Number'] . " ";?></td>
				<td><?php echo $ress['Color'] . " ";?></td>
			</tr>
		</table>
<br>
<?php
	}
	
?>