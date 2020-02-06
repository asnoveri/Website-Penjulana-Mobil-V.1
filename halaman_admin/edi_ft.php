<?php
    
  $ed=mysqli_query($con,"select * from gbr_mobil where id_gambar='$_GET[kd]'");
  $ed1=mysqli_fetch_array($ed);
?>

 <button type="button" class="btn btn-bg"> <span class="glyphicon glyphicon-chevron-left"></span>
    <a href="?page=prdk">Produk Anda</a>
  </button>
<button type="button" class="btn btn-bg"> <span class="glyphicon glyphicon-chevron-left"></span>
    <a href="?page=edit_foto&id=<?php echo $_GET['id']?>">Edit Foto </a>
</button>

<div class="container" style="width: 50% ; border: 2px solid;border-color: lightgrey; border-radius: 12px; text-align: center;">                                
        <h3 style="text-align: center;"><b>Edit Foto Produk Anda</b></h3> 

          <form action="" method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="">Foto  :</label>
                          <div class="col-sm-10">
                            <input type="file"  name="foto"  class="form-control">
                            </div>
                          <br>
                        </br>
                        <br>
                            <button type="submit" class="btn btn-primary" value="tbh"  name="tbh">Tambahkan</button>
                      </div>
                      
          </form>
         

</div>


   <?php
            if(isset($_POST['tbh'])){
              $file_name=$_FILES['foto']['name'];
              $tmp=$_FILES['foto']['tmp_name'];
              $folder='./img/';
           
           if (move_uploaded_file($tmp, $folder.$file_name)) {
              $gambar=mysqli_query($con,"UPDATE gbr_mobil set gambar = '$file_name' WHERE gbr_mobil .id_gambar = $_GET[kd]");
              if($gambar){
               
                 echo"<script>alert('Foto BERHASIL di EDIT')
                  window.location=('?page=edit_foto&id=$_GET[id]')</script>";
              }else{
                    echo "<script>alert('gagal Edit Foto')</script>";
           
               
              }
              }else{
              echo "<script>alert('gagal Memindahkan file')</script>";
           
           }
            }

        ?>


