<?php 
include 'connect.php'; 
$jarak=$_GET['nil']; 
date_default_timezone_set("Asia/Bangkok");
$tgl=date("d/m/y h:i:s A");

$query =  "INSERT INTO data (jarak,date) value ('$jarak','$tgl')";
$query=mysqli_query($connect,$query); 

if ($query) 
{ 
 echo"Success";
} 
else 
{ 
 echo "Masih gagal, semangat";
} 
 
?>