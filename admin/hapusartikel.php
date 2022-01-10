<?php
include "koneksi.php";
?>
<?php

$ambil = $koneksi->query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoartikel = $pecah['gambar'];
if(file_exists("../foto_artikel/$fotoartikel"))
{
	@unlink("../foto_artikel/$fotoartikel");
}


$koneksi->query("DELETE FROM artikel WHERE id_artikel='$_GET[id]'");

echo "<script>alert('Artikel Terhapus');</script>";
echo "<script>location='artikel.php';</script>";

?>