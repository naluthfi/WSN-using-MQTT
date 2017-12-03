<?php  
include 'connect.php';
$queri="Select * From data" ;  //menampikan SEMUA data dari tabel bel

$tampil=mysqli_query ($connect,$queri);    //fungsi untuk SQL
$obj=new Stdclass ();


// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($tampil)){
 $obj->angka=$data['jarak'];
}
echo "$obj->angka";
?>