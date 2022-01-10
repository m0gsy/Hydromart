<?php
include "koneksi.php";

$ambil = $koneksi->query("SELECT * FROM upload WHERE id_upload='$_GET[id]'");
$pecah = $ambil->fetch_assoc();



$koneksi->query("DELETE FROM upload WHERE id_upload='$_GET[id]'");
?>
<script>
    alert('PDF Berhasil Terhapus'); location='unduhan.php';
</script>