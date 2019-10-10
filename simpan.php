<?php 

$conn = new mysqli("localhost", "root", "", "tokobuku"); //koneksi

$judul   = $_POST['judul'];
$stok    = $_POST['stok'];
$penulis = $_POST['penulis'];

$res = $conn->query("insert into barang (judul, stok, penulis) values('$judul','$stok','$penulis')");

if (!$res) {
	echo "Gagal";
} else{
	echo "Berhasil";
}

?>