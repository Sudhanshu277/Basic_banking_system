<?php
include 'procon.php';

if (isset($_GET['c_id']))
{
	$id = $_GET['c_id'];
	$data = "SELECT * FROM customers WHERE c_id = $id";
	$result = mysqli_query($con,$data);
	$a = mysqli_fetch_array($result);
 }


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 160px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  /*#818181*/
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
body{
    		
    		background-color: #ccc;
    	}
    	h1{
    		font-family: 'Sriracha', cursive;
    	}
	</style>
</head>
<body>
	<div class="sidenav">
  <a href="c_display.php" class="btn btn-info">Back</a><br>
  <a href="t_display.php?c_id=<?php echo $a['c_id']?>" class="btn btn-info">Transction History</a>
  
</div>
	<div class="container" style="margin-top: 50px;">
		<h1 style="text-transform: uppercase;" >WELCOME <?php echo $a['c_name']?></h1>
		<div class="row" style="margin-top: 50px;">
		<div class="col-md-2">
			    <tr>
					
					<td><img src="<?php echo $a['image']?>" style="width: 100px;height: 100px;" class="rounded-circle" ></td>
				</tr>
		</div>
		<div class="col-md-8" class="m-auto">
			<table class="table table-bordered text-center bg-dark" style="color: white;">
				<tr>
					<th>NAME</th>
					<td><?php echo $a['c_name']?></td>
				</tr>
				<tr>
					<th>EMAIL</th>
					<td><?php echo $a['email']?></td>
				</tr>
				<tr>
					<th>CURRENT BALANCE</th>
					<td><?php echo $a['current_balance']?></td>
				</tr>
				
			</table>
			<a href="transfer.php?c_id=<?php echo $a['c_id']?>" class="btn btn-info">Transfer Money</a>
		</div>
        <div class="col-md-2"></div>
        </div>
	</div>

</body>
</html>