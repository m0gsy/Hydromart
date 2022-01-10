<?php
include "koneksi.php";
?>
<?php

$ambil = $koneksi->query("SELECT * FROM profile WHERE id_profile='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoprofile = $pecah['gambar'];
if(file_exists("../foto_profile/$fotoprofile"))
{
	@unlink("../foto_profile/$fotoprofile");
}


$koneksi->query("DELETE FROM profile WHERE id_profile='$_GET[id]'");

echo "<script>alert('Artikel Terhapus');</script>";
echo "<script>location='profile.php';</script>";

?>