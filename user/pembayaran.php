<?php
session_start();
//koneksi ke database
include 'koneksi.php';
include 'navbar.php';


//jika tidak ada session pelanggan (blm login)
if (!isset($_SESSION["pelanggan"]) or empty($_SESSION["pelanggan"])) {
	echo "<script>alert('Silahkan Login');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}


//mendapatkan id_pembelian dari url
$idpel = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$idpel'");
$detpem = $ambil->fetch_assoc();


?>

<!DOCTYPE html>
<html>

<head>
	<title>Pembayaran</title>
	<link rel="stylesheet" href="Admin/assets/css/bootstrap.css">
</head>

<body>

	<div class="container">
		<h2>Konfirmasi Pembayaran</h2>



		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Investor</label>
				<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" class="form-control" name="alamat">

			</div>
			<div class="form-group">
				<label>Paket</label>
				<input type="text" class="form-control" name="paket">

			</div>
			<div class="form-group">
				<label>No. Telepon</label>
				<input type="text" class="form-control" name="notelp">
			</div>
			<label for="bank">Pilih Bank:</label>

			<select id="bank" name="bank" required>
				<?php
				$ambil = $koneksi->query("SELECT * FROM bank");
				while ($bank = $ambil->fetch_assoc()) {
				?>
					<option value="<?php echo $bank['nama_bank']; ?>">
						<?php echo $bank['nama_bank']; ?>
					</option>


				<?php } ?>
				<div class="form-group">
					<label>Foto Bukti</label>
					<input type="file" class="form-control" name="fupload">
					<p class="text-danger">Foto bukti harus JPG max 2MB</p>
				</div>
				<br>
				<button class="btn btn-primary" name="kirim">Kirim</button>
		</form>
	</div>
	<br>
	<a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />

	<?php
	//jk ada tombol kirim
	if (isset($_POST["kirim"])) {
		//upload dulu foto bukti
		$lokasi_file = $_FILES['fupload']['tmp_name'];
		$nama_file   = $_FILES['fupload']['name'];
		// Tentukan folder untuk menyimpan file
		$folder = "bukti/$nama_file";
		// tanggal sekarang
		$tgl_upload = date("Ymd");
		// Apabila file berhasil di upload
		if (move_uploaded_file($lokasi_file, "$folder")) {

			// Masukkan informasi file ke database
			$konek = mysqli_connect("localhost", "root", "", "hydromart");

			$query = "INSERT INTO pembayaran (id_pelanggan, nama, alamat_pelanggan, paket, telepon_pelanggan, bank, bukti)
            VALUES('$idpel','$_POST[nama]', '$_POST[alamat]', '$_POST[paket]', '$_POST[notelp]', '$_POST[bank]','$nama_file')";

			mysqli_query($konek, $query);
		} else {
			echo "File gagal di upload";
		}
		echo "<script>alert('Terima Kasih Sudah Mengirimkan Bukti Pembayaran, Silahkan Download Form');</script>";
		echo "<script>location='unduhan.php';</script>";

	}
	?>

</body>

</html>
<?php
include 'footer.php';
?>