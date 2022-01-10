<?php
include "koneksi.php";
?>
<?php

$ambil = $koneksi->query("SELECT * FROM paket WHERE id_paket='$_GET[id]'");
$pecah = $ambil->fetch_assoc();



$koneksi->query("DELETE FROM paket WHERE id_paket='$_GET[id]'");

echo "<script>alert('Paket Terhapus');</script>";
echo "<script>location='paket.php';</script>";