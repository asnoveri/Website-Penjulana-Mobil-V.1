      <?php
       $sql = mysqli_query($con, "SELECT * FROM produk where id_produk='$_GET[id]'");
      $data = mysqli_fetch_array($sql);

      ?>
<button type="button" class="btn btn-bg"> <span class="glyphicon glyphicon-chevron-left"></span><a href="?page=prdk">
 Produk Anda</a>
</button>           
      <div class="container" style="width: 50%">                              
          <h3><b>Edit Foto <?php echo $data['judul_produk'] ?></b></h3>
             <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myEdit">
                  <a href="#">Tambah Gambar Produk</a> 
             </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myEdit1">
                  <a href="#">Edit FOTO Tampil Halaman Produk</a> 
           </button> 
            <div class=" table-responsive"> 
             <table class="table table-bordered">
              <thead>
                <tr>
                   
                  <th>Gambar Produk</th>
                  <th width="100" style="text-align: center;">AKSI</th> 
                </tr>
              </thead>
                  <?php
        $sql1=mysqli_query($con,"SELECT * FROM gbr_mobil where id_produk='$_GET[id]'");
        while ($a=mysqli_fetch_array($sql1)) {?>          
             <tbody>
                <tr>
                	<td style="text-align: center;">
                      <img src="img/<?php echo $a['gambar'];?>"  class="img-circle" width="120" height="100"  alt="Image" > 
                  </td>
                	<td class="btn-group-vertical" >
                      <button type="button" class="btn btn-warning"><a href="?page=edi_ft&kd=<?php echo$a['id_gambar']?>&id=<?php echo$a['id_produk']?>">EDIT</a>
                    </button>
                      <button type="button" class="btn btn-warning"><a href="?page=hapus_ft&kd=<?php echo$a['id_gambar']?>&id=<?php echo$a['id_produk']?>">HAPUS</a>
                    </button>
                 </td>    
                	
                </tr>	         
                	<?php }?>
              </tbody>
            </table>
          </div>



           <div class="modal fade" id="myEdit" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambakan Gambar <?php echo $data['judul_produk'] ?></h4>
              </div>
              <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="">Foto:</label>
                        <input type="file"  name="foto[]" multiple class="form-control"   required>
                      </div>
                      <button type="submit" class="btn btn-primary" value="tbh"  name="tbh">Tambahkan</button>
                    </form>
                 </div>
                </div>       
            </div>
          </div>
            <?php
          if (isset($_POST["tbh"])) {
              $fileName = $_FILES['foto']['name'];
              $file=$fileName[0];
              $dtagbr =mysqli_query($con, "UPDATE  produk set gbr='$file' WHERE produk. id_produk='$_GET[id]'");
                // move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
            

              echo $file;
            $jumlah = count($_FILES['foto']['name']);
            if ($jumlah > 0) {
              for ($i=0; $i < $jumlah; $i++) { 
                $file_name = $_FILES['foto']['name'][$i];
                $tmp_name = $_FILES['foto']['tmp_name'][$i];        
                move_uploaded_file($tmp_name, "img/".$file_name);
                $g=mysqli_query($con,"INSERT INTO gbr_mobil(id_gambar,id_produk,gambar) VALUES('','$_GET[id]','$file_name')");
                if($g){
                  echo"<script>alert('Foto BERHASIL di Tambahkan')
                  window.location=('')</script>";
                      }       
                    }
                  }
              }        
           
?>




         <div class="modal fade" id="myEdit1" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Gambar <?php echo $data['judul_produk'] ?></h4>
              </div>
              <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="">EDIT FOTO</label>
                        <input type="file"  name="gambar"  class="form-control">
                        <!--  <input type="hidden" name="gbrdb" value="<?php echo $data['gbr'] ?>"> -->
                      </div>
                      <button type="submit" class="btn btn-primary" value="edt_pt1"  name="edt_pt1">Edit Foto</button>
                    </form>
                 </div>
                </div>       
            </div>
        </div> 
        <?php
            if(isset($_POST['edt_pt1'])){
              $file_name=$_FILES['gambar']['name'];
              $tmp=$_FILES['gambar']['tmp_name'];
              $folder='./img/';
           
           if (move_uploaded_file($tmp, $folder.$file_name)) {
              $gambar=mysqli_query($con,"UPDATE produk set gbr = '$file_name' WHERE produk .id_produk = $_GET[id]");
              if($gambar){
                 echo"<script>alert('Foto BERHASIL di EDIT')
                  window.location=('?page=prdk')</script>";
              }else{
                    echo "<script>alert('gagal Edit Foto')</script>";
           
               
                }

              }else{
              echo "<script>alert('gagal Memindahkan file')</script>";
           
           }
            }

        ?>
         
   </div>
  
 
 
