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
 <div class="container" style="margin-top: 80px;">
 	<div class="row">
 		<div class="col-md-1">
       <a href="index.php" class="btn btn-success">Home</a>     
        </div>
 		<!-- <div class="col-md-2"></div> -->
 		<div class="col-md-10 table table-bordered card shadow" style="margin-top: 50px; background-color: #f3f3f3;border:transparent;">
            <div class="row" style="background-color: #f3f3f3">
            <div class="col-md-6">
 			<h1 class="text-center">OPEN YOUR ACCOUNT</h1>
 			<form class="form-group" method="post" action="c_insert.php" enctype="multipart/form-data">
 				Name:
 				<input style="border: transparent;" type="text" name="c_name" placeholder="Enter your name" required="required" class="form-control"><br>
 				Email:<br>
 				<input style="border: transparent;" type="text" name="email" placeholder="Enter your email" required="required" class="form-control"><br>
                Current Balance:<br>
                <input style="border: transparent;" type="text" name="current_balance" placeholder="Enter youe A/M" class="form-control"><br>
 				Profile Image:<br>
 				<input style="border: transparent;" type="file" name="image" class="form-control"><br>
 				<input  type="submit" name="submit" value="submit" class="btn btn-dark w-100">
                
 			</form>
            </div>
            <div class="col-md-6" style="margin-top: -30px;">
            <img src="https://media.istockphoto.com/photos/protecting-stacked-banknotes-surrounded-by-human-figures-picture-id1189508306?b=1&k=6&m=1189508306&s=170667a&w=0&h=6TGg8_cAG-igYBCA3pAlSK9kgWKwsMfWn0kz-NqDqvs=" >
            <h1 style="margin-top: 10px;">Welcome to your Bank</h1>
            </div>
            </div>
 		</div>
 		<!-- <div class="col-md-2"></div> -->
 		<div class="col-md-1"></div>
 	</div>
 </div>
</body>
</html>