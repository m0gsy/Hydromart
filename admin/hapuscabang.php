<?php
include "koneksi.php";
?>
<?php

$ambil = $koneksi->query("SELECT * FROM cabang WHERE id_cabang='$_GET[id]'");
$pecah = $ambil->fetch_assoc();



$koneksi->query("DELETE FROM cabang WHERE id_cabang='$_GET[id]'");

echo "<script>alert('Artikel Terhapus');</script>";
echo "<script>location='cabang.php';</script>";

?>