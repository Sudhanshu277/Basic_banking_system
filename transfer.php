<?php
include 'procon.php';

if (isset($_GET['c_id']))
{
	echo $id = $_GET['c_id'];
	$data = "SELECT * FROM customers WHERE c_id = $id";
	$result = mysqli_query($con,$data);
	$a = mysqli_fetch_array($result);
	$na = $a['c_name'];
	$img = $a['image'];
}
?>
<?php 
include 'procon.php';

if (isset($_POST['submit']))
{
  $id1 = $_POST['id1'];
  $amount = $_POST['amount'];
  if($a['current_balance']>=$amount)
  {
  	$update = "UPDATE customers SET current_balance = current_balance - $amount WHERE c_id = $id";
  	$result = mysqli_query($con,$update);
  	$update = "UPDATE customers SET current_balance = current_balance + $amount WHERE c_id = $id1";
  	$result = mysqli_query($con,$update);

  	$data = "SELECT * FROM customers WHERE c_id = $id1";
  	$result = mysqli_query($con,$data);
  	$c = mysqli_fetch_array($result);
    $name = $c['c_name'];
    $i = $c['image'];
  	$data ="INSERT INTO transfer(t_name,t_image,amount,c_id,c_name,c_image)VALUES('$name','$i','$amount','$id','$na','$img')";
  	$result = mysqli_query($con,$data);
  	if ($result) 
  	{
  		header('Location:t_display.php');
  	}

  }	
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		body{
			background-color: #ccc;
		}
		h1{
    		font-family: 'Sriracha', cursive;
    	}
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
	</style>
</head>
<body>
	<div class="sidenav">
  <a href="c_display.php" class="btn btn-info">Back</a><br>
  <a href="t_display.php?c_id=<?php echo $a['c_id']?>" class="btn btn-info">Transction History</a>
  
</div>
	<div class="container" style="margin-top: 50px;">
		<h1 style="text-transform: uppercase;"><?php echo $a['c_name']?> proceed your Transction</h1>
		<div class="row">
			<div class="col-md-2" style="margin-top: 20px;">

				<img src="<?php echo $a['image']?>" class="rounded-circle" >
			</div>
			<div class="col-md-8" >
				<div class="col-md-6" style="margin-left: 20px;">
				<form class="form-group" method="post">
					Name:
					<select name="id1" class="form-control">
					<option>select</option>
					<?php
						include 'procon.php';
						$data = "SELECT * FROM customers";
						$result = mysqli_query($con,$data);
						
						while ($d=mysqli_fetch_array($result))
						 {
					?>
					<option value="<?php echo $d['c_id']?>">
                       <?php echo $d['c_name'];?>
					</option><br>
					
					<?php }?>
					</select>
					Amount:<br>
					<input type="text" name="amount" class="form-control"><br>
					<input type="submit" name="submit" value="Transfer" class="btn btn-dark">

				</form>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

</body>
</html>