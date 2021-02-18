<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
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
  
	<h1 class="text-center">Coustomres Detalis</h1>
  <a href="index.php" class="btn btn-primary">Home</a>
	<table class="table table-bordered bg-light">
		<tr>
		<th>ACCOUNT NUMBER</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>ACTION</th>
		</tr>

		<?php
		include 'procon.php';
		$data = "SELECT * FROM customers";
		$result = mysqli_query($con,$data);
		while($a=mysqli_fetch_array($result))
		{
 
		
       ?>
       <tr>
       	<td>0905IT1810<?php echo $a['c_id']?></td>
       	<td><?php echo $a['c_name']?></td>
       	<td><?php echo $a['email']?></td>
       	<td>
       		<a href="c_show.php?c_id=<?php echo $a['c_id']?>" class="btn btn-dark" >SHOW DETALIS</a>
       	</td>
       </tr>
   <?php }?>
	</table>

</body>
</html>