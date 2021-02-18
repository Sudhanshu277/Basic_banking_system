<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		h1{
    		font-family: 'Sriracha', cursive;
    	}
    	body{
    		background-color: #ccc;
    	}
	</style>
</head>
<body>
	<h1 class="text-center">Coustermer Transction Detalis</h1>
	<a href="index.php" class="btn btn-info">Home</a>
	<table class="table table-bordered bg-light">
	<tr>
	<th>TRANSFER BY</th>
	<th>TRANSFER TO</th>
	<th>AMOUNT</th>
	<th>ACTION</th>
	</tr>
	<?php
	include 'procon.php';
    
    $data = "SELECT * FROM transfer";
    $result = mysqli_query($con,$data);
   
    while ($a = mysqli_fetch_array($result)) {
    	
   
	?>

	<tr>
		<td><?php echo $a['c_name']?></td>
		<td><?php echo $a['t_name']?></td>
		<th><?php echo $a['amount']?></th>
		<th>
			<a href="" class="btn btn-info">See Detalis</a>
		</th>
	</tr>
    <?php }?>
    </table>
</body>
</html>