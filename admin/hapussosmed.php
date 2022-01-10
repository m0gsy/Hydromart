<?php
include "koneksi.php";
?>
<?php

$ambil = $koneksi->query("SELECT * FROM sosmed WHERE id_sosmed='$_GET[id]'");
$pecah = $ambil->fetch_assoc();



$koneksi->query("DELETE FROM sosmed WHERE id_sosmed='$_GET[id]'");

echo "<script>alert('Sosial Media Terhapus');</script>";
echo "<script>location='sosmed.php';</script>";