<?php
$con = mysqli_connect("localhost", "root","", "cbt_2");
?>

<select name="nik" id="nik1" class="form-control" onchange='changeValue(this.value)' required>
  <option value="">-Pilih-</option>
 <?php 
 $query=mysqli_query($con, "select * from tampil_dosen order by nim asc"); 
 $result = mysqli_query($con, "select * from tampil_dosen");  
 $jsArray = "var prdName = new Array();\n";
 while ($row = mysqli_fetch_array($result)) {  
 echo '<option name="id_kategori"  value="' . $row['id_kategori'] . '">' . $row['nama_kategori'] . '</option>';  
 $jsArray .= "prdName['" . $row['id_kategori'] . "'] = {nama_asesi:'" . addslashes($row['nama_kategori']) . "',kode_tuk:'".addslashes($row['nama_dosen'])."',nama_tuk:'".addslashes($row['nik'])."'};\n";
  }
  ?>
</select>