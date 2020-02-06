<?php
    
  $edit=mysqli_query($con,"select * from produk where id_produk='$_GET[id]'");
  $edit1=mysqli_fetch_array($edit);
  // $ed=mysqli_query($con,"select * from gbr_mobil where id_produk='$_GET[id]'");
  // $ed1=mysqli_fetch_array($ed);
?>

 <button type="button" class="btn btn-bg"> <span class="glyphicon glyphicon-chevron-left"></span>
    <a href="?page=prdk">Produk Anda</a>
  </button>

<div class="container-fluid ">                                
        <h3><b>Edit Data Produk Anda</b></h3> 
          <div class="row">
                <div class="col-sm-6" > 
                 <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="">Merek Produk</label>
                    <input type="text" name="judul_produk" class="form-control"  
                    value="<?php echo $edit1['judul_produk'];?>" >
                  </div>
                  <div class="form-group">
                    <label for="">Deskripsi Produk</label>
                    <textarea class="form-control" name="ket_produk"><?php echo $edit1['ket_produk'];?></textarea>
                  </div>  
                   <div class="form-group">
                     <label for="">Status Produk</label>
                    <select name="status_produk" class="form-control">
                        <option value="<?php echo $edit1['status_produk'];?>"><?php $edit1['status_produk']?></option>
                        <option value="Baru">Baru</option>
                        <option value="Bekas">Bekas</option>
                    </select>
                  </div>     
                  <button type="submit" class="btn btn-primary" value="updt"  name="updt">UPDATE DATA</button>
                   </form>
                </div>            
          </div>
</div>



<?php
      if(isset($_POST['updt'])){
        $judul_produk=mysqli_escape_string($con,$_POST['judul_produk']);
        $ket_produk=mysqli_escape_string($con,$_POST['ket_produk']);
        $status_produk=mysqli_escape_string($con,$_POST['status_produk']);

                $data=mysqli_query($con,"UPDATE produk SET judul_produk = '$judul_produk',  status_produk='$status_produk', ket_produk = '$ket_produk' WHERE produk.id_produk = '$_GET[id]'");    
        
                  if ($data) {
                      echo"<script>alert('Foto BERHASIL di Edit')
                  window.location=('?page=prdk')</script>";
                }       
                  
 
      }

      

?>

<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
      selector:'textarea'
  });
</script>
