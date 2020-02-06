<?php

    
  $ed=mysqli_query($con,"select * from tipe_produk where id_tipe='$_GET[kd]'");
  $ed1=mysqli_fetch_array($ed);
?>

 <button type="button" class="btn btn-bg"> <span class="glyphicon glyphicon-chevron-left"></span>
    <a href="?page=prdk">Produk Anda</a>
  </button>
<button type="button" class="btn btn-bg"> <span class="glyphicon glyphicon-chevron-left"></span>
    <a href="?page=detail&id=<?php echo $_GET['id']?>">Detail Produk </a>
</button>

<div class="container" style="width: 50% ; border: 2px solid;border-color: lightgrey; border-radius: 12px; text-align: center;">                                
        <h3 style="text-align: center;"><b>Edit Tipe & Harga Produk Anda</b></h3> 

          <form action="" method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="">Tipe  :</label>
                          <div class="col-sm-10">
                            <input type="text"  name="tipe"  class="form-control" 
                            value="<?php echo$ed1['tipe']?>">
                            </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="">Harga  :</label>
                          <div class="col-sm-10">
                            <input type="text"  name="harga"  class="form-control"  
                            value="<?php echo $ed1['harga']?>">
                            </div>
                      </div>
                      <br>
                      <br>
                      <br>
                      <button type="submit" class="btn btn-primary" value="edit"  name="edit">EDIT</button>
          </form>
         

</div>


   <?php
            if(isset($_POST['edit'])){
           			$tipe=mysqli_escape_string($con,$_POST['tipe']);
           			$harga=mysqli_escape_string($con,$_POST['harga']);
           			
              $tyepuh=mysqli_query($con,"UPDATE tipe_produk set tipe = '$tipe', harga=$harga WHERE tipe_produk .id_tipe = $_GET[kd]");
              if($tyepuh){
               
                 echo"<script>alert('Tipe Berhasil di Edit')
                  window.location=('?page=detail&id=$_GET[id]')</script>";
              }else{
                    echo "<script>alert('gagal Edit Foto')</script>";
              }
             
            }

   ?>


