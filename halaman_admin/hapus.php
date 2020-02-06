<?php

$sql=mysqli_query($con,"DELETE FROM produk WHERE id_produk='$_GET[id]'");
$sql=mysqli_query($con,"DELETE FROM tipe_produk WHERE id_produk='$_GET[id]'");
$sql=mysqli_query($con,"DELETE FROM gbr_mobil WHERE id_produk='$_GET[id]'");



if ($sql){
 
    echo"<script>alert('DATA BERHASIL TERHAPUS')
	window.location=('?page=prdk')</script>";
}
else {
    echo "<div class='pesaneror'><h8>GAGAL MENGHAPUS DATA </h8></div>";
    header('location:?page=');
}


?>