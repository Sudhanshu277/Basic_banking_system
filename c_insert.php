<?php
include 'procon.php';

if (isset($_POST['submit']))
{
   echo $a = $_POST['c_name'];
   echo $b = $_POST['email'];
   echo $c = $_POST['current_balance'];
   // $c = $_FILES['image'];
   // print_r($c);
   $filename = $_FILES['image']['name'];
   $tmp_name = $_FILES['image']['tmp_name'];

   $file = "upload/".$filename;
   //print_r($file);
   move_uploaded_file($tmp_name,$file);

   $data = "INSERT INTO customers(c_name,email,current_balance,image)VALUES('$a','$b','$c','$file')";
   $result = mysqli_query($con,$data);

if ($result) {
   header('location:c_display.php');
}
   
}
?>