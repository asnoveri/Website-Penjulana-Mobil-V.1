<?php
$sql=mysqli_query($con,"DELETE FROM gbr_mobil WHERE id_gambar='$_GET[kd]'");



if ($sql){
 
    echo"<script>alert('DATA BERHASIL TERHAPUS')
	window.location=('?page=edit_foto&id=$_GET[id]')</script>";
}
else {
    echo "<div class='pesaneror'><h8>GAGAL MENGHAPUS DATA </h8></div>";
    header('location:?page=');
}
?>
