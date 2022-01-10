<?php
include "koneksi.php";
?>
<?php

$ambil = $koneksi->query("SELECT * FROM layanan WHERE id_layanan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotolayanan = $pecah['gambar'];
if(file_exists("../foto_layanan/$fotolayanan"))
{
	@unlink("../foto_layanan/$fotolayanan");
}


$koneksi->query("DELETE FROM layanan WHERE id_layanan='$_GET[id]'");

echo "<script>alert('Artikel Terhapus');</script>";
echo "<script>location='layanan.php';</script>";

?>