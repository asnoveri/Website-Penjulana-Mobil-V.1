<?php
$sql=mysqli_query($con,"DELETE FROM tipe_produk WHERE id_tipe='$_GET[kd]'");




if ($sql){
 
    echo"<script>alert('DATA BERHASIL TERHAPUS')
	window.location=('?page=detail&id=$_GET[id]?>')</script>";
}
else {
    echo "<div class='pesaneror'><h8>GAGAL MENGHAPUS DATA </h8></div>";
    header('location:?page=');
}


?>
