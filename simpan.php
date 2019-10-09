<?php 

$link    = mysqli_connect("127.0.0.1", "root", "", "tokobuku"); //koneksi

$judul   = $_POST['judul'];
$stok    = $_POST['stok'];
$penulis = $_POST['penulis'];

$result= mysqli_query($link, "insert into barang (judul, stok, penulis) values('$judul','$stok','$penulis')");//create

if (!$result) {
	echo "Gagal";
} else{
	echo "Berhasil";
}

?>