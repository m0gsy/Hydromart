<?php 
include "koneksi.php";
$id_upload = $_GET['id'];
$sql = "SELECT * FROM upload WHERE id_upload='$id_upload' ";
$query = mysqli_query($koneksi, $sql);
$data =mysqli_fetch_array($query);
?>
<hr>
<a href="unduhan.php" class="btn btn-warning">Kembali</a>
</hr>
<embed type="apllication/pdf src="files/> <?php echo $data['nama_file'];?>" </embed >