

<?php
session_start();
include 'koneksi.php';
include 'navbar.php';

//jk tdk ada session pelanggan(blm login) maka dilarikan ke login.php
if(!isset($_SESSION["pelanggan"]))
{
	echo "<script>alert('Silahkan Login Terlebih Dahulu Jika Ingin Akses Menu Unduhan');</script>";
	echo "<script>location='login.php';</script>";
}
?>




<div class="breadcam_area bradcam_bg overlay2">
  <div class="bradcam_text">
    <h3>Unduhan</h3>
  </div>
</div>
<br>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "hydromart");
$query = "SELECT * FROM upload ORDER BY id_upload DESC";
$hasil = mysqli_query($koneksi, $query);
while ($perunduhan = mysqli_fetch_array($hasil)) {


?>
  <table class="table align-middle">
    <thead>
      <tr>
        <th style="width :30%;">Judul</th>
        <th style="width :30%;">File</th>
        <th style="width :30%;">Download</th>

      </tr>
    </thead>
    <tbody>

      <tr>
        <td><?php echo "<b>$perunduhan[deskripsi]<br>"; ?></td>
        <td><?php echo "$perunduhan[nama_file]<br>"; ?></td>
        <td><?php echo "<a href=\"download.php?file=$perunduhan[nama_file]\">Download File</a><br>" ?></td>
        

      </tr>
 

    </tbody>
    
  </table>
  <?php } ?>
  </br>
  <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=+6287785157089' rel='nofollow noopener' target='_blank' title='Whatsapp' />



  <?php
  include 'footer.php';
  ?>