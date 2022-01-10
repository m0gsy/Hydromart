<?php
session_start();
//koneksi ke database
include 'koneksi.php';
include 'navbar.php';

//jika tidak ada session pelanggan (blm login)
if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
	echo "<script>alert('Silahkan Login');</script>";
	echo "<script>location='login.php';</script>";
	exit();

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amolatte Milkshake</title>
	<link rel="stylesheet" href="Admin/assets/css/bootstrap.css">
</head>
<body>





	
	<section class="riwayat">
		<div class="container">
			<h3>Pesanan <?php echo $_SESSION["pelanggan"]["nama_pelanggan"] ?></h3>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Investor</th>
						<th>Alamat</th>
						<th>Paket</th>
                        <th>No. Telepon</th>
                        <th>Tanggal</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$nomor=1;
					//mendapatkan id_pelanggan yang login dari session
					$id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];

					$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'");
					while($pecah = $ambil->fetch_assoc()){
					?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah["nama_pelanggan"] ?></td>
						<td><?php echo $pecah["alamat_pelanggan"] ?></td>
                        <td><?php echo $pecah["paket"] ?></td>
                        <td><?php echo $pecah["telepon_pelanggan"] ?></td>
                        <td><?php echo $pecah["tanggal"] ?></td>
						<td>
							
							<a href="pembayaran.php?id=<?php echo $pecah["id_pelanggan"]; ?>" class="btn btn-success">Pembayaran</a>
						</td>
					</tr>
					<?php $nomor++; ?>
				<?php } ?>
				</tbody>
				<div class="alert alert-info">
                <strong>Silahkan Melakukan Pembayaran sebesar 5% atau sebesar Rp. 5.000.000-,.</strong>

              </div>
			</table>
		</div>
	</section>
	<a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />
</body>
</html>
<?php
include 'footer.php';
?>