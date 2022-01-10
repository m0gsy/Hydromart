<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "bukti/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","hydromart");

  $query = "INSERT INTO pembayaran (id_pelanggan, nama, alamat_pelanggan, paket, telepon_pelanggan, tanggal, bank, bukti)
            VALUES('$idpel','$_POST[nama]', '$_POST[alamat]', '$_POST[paket]', '$_POST[notelp]', '$_POST[tanggal]', '$_POST[bank]','$nama_file')";
            
  mysqli_query($konek, $query);
}
else{
  echo "File gagal di upload";
}
header("Location: unduhan.php"); // Langsung mengarah ke Home index.php
											
?>