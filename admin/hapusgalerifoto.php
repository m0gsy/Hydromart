<?php
include "koneksi.php";
?>
<?php

$ambil = $koneksi->query("SELECT * FROM galerifoto WHERE id_galeri='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotogaleri = $pecah['gambar'];
if(file_exists("../foto_galeri/$fotogaleri"))
{
	unlink("../foto_galeri/$fotogaleri");
}


$koneksi->query("DELETE FROM galerifoto WHERE id_galeri='$_GET[id]'");

echo "<script>alert('Foto Terhapus');</script>";
echo "<script>location='galerifoto.php';</script>";

?>