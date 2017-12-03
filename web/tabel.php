<?php
include 'connect.php';
$query =  "Select* from data ORDER By id DESC";
$tampil=mysqli_query($connect,$query); 
//fungsi untuk SQL
$obj=new Stdclass ();
// perintah untuk membaca dan mengambil data dalam bentuk array
echo "<div class='col l12'>";
while ($data = mysqli_fetch_array ($tampil)){
	echo "
		<div class='col l9'>
			".$data['date']."
		</div>
		<div class='col l3'>
			".$data['jarak']."
		</div>
	";
}
echo "</div>";
?>