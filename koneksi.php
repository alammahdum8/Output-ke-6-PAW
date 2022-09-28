<?php

$koneksi= mysqli_connect("localhost","root","","alamm");

if($koneksi){
	echo "koneksi sukses";
}
else{
	echo "Koneksi gagal";
}
?>