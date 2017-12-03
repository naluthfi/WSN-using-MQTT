<?php 
$host ="localhost"; //atau bisa di isi dengan ip localhost 127.0.0.1
$user ="root"; //id user, karena kita menggunakan localhost, nama usernya di isi root
$pass =""; //pasword kita kosongi
$database ="wsn";
/*$host ="mysql.idhostinger.com"; //atau bisa di isi dengan ip localhost 127.0.0.1
$user ="u348075798_tk15"; //id user, karena kita menggunakan localhost, nama usernya di isi root
$pass ="mahasiswakece15"; //pasword kita kosongi
$database ="u348075798_tk15"; //diisi dengan nama database yang telah kita buat tadi*/
$connect=mysqli_connect($host,$user,$pass,$database) or die ("Koneksi gagal"); /*untuk mengkoneksikan dengan 
database yang telah kita buat tadi,dengan menginputkan host, user, pass, database dengan perintah mysqli_connect,
 jika gagal maka muncul pemberitahuan "koneksi gagal"*/
//echo "Connect<br>";// memberi pemberitahuan "connect"
?>