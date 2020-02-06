      <div class="container-fluid"  >                              
          <h3><b>PROFIL ANDA </b></h3>
               <div class=" table-responsive"> 
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="text-align: center;">NAMA ANDA</th> 
                  <th style="text-align: center;">TENTANG ANDA</th>
                  <th width="230">FOTO PROFIL ANDA</th>    
                  <th style="text-align: center;">AKSI</th> 

                  
                </tr>
              </thead>
             <tbody>
                 <?php
                  $sql=mysqli_query($con,"SELECT * FROM tentang WHERE id_tentang='1'");
                  while ($c=mysqli_fetch_array($sql)) {?>  
                <tr>
                  <td><?php echo $c['judul'];?></td>
                  <td><?php echo $c['isi'];?></td>
                  <td style="text-align: center;"><img src="img/<?php echo $c['foto'];?>"  class="img-circle" width="120" height="100"  alt="Image"> </td>
                  <td class="btn-group-vertical" >
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myEdit"><a href="#">Edit Profil</a> 
                    </button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myEdit1"><a href="#">EDIT KATA SANDI</a> 
                    </button>
                 </td>    
                </tr>
                
                  

               </tbody>
            </table>
          </div>
   </div>
<div class="modal fade" id="myEdit" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">SILAHKAN EDIT PROFIL ANDA</h4>
              </div>
              <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="">Judul:</label>
                        <input type="text" name="judul"  class="form-control"  placeholder="judul" required value="<?php echo $c['judul'];?>" >
                      </div>
                      <div class="form-group">
                        <label for="">Foto:</label>
                        <input type="file"  name="foto" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label for="">No Hp:</label>
                        <input type="text"  name="no_hp" class="form-control" value="<?php echo $c['no_hp'];?>" required>
                      </div>
                      <div class="form-group">
                        <label for="">Tentang anda</label>
                       <textarea class="form-control" name="isi"  value="<?php echo $c['isi'];?> "></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" value="update"  name="update">UPDdate</button>
                    </form>
                 </div>
                </div>       
            </div>
</div><?php }?>                     
                   <?php
               if (isset($_POST['update'])){
                $judul=mysqli_escape_string($con,$_POST['judul']);
                $isi=mysqli_escape_string($con,$_POST['isi']);
                $no_hp=mysqli_escape_string($con,$_POST['no_hp']);
               $fileName = $_FILES['foto']['name'];
                // Simpan ke Database
                $sql =mysqli_query($con, "UPDATE tentang SET judul = '$judul', isi = '$isi' , foto='$fileName', no_hp='$no_hp' WHERE tentang . id_tentang = '1'");

                // Simpan di Folder Gambar
                move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name']);
                echo"<script>alert('Profi Berhasil diEdit !');history.go(-1);</script>"; 
               } 
              ?>
 
 <div class="modal fade" id="myEdit1" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">SILAHKAN EDIT Kata Sandi Anda</h4>
              </div>
              <div class="modal-body">
                    <form action="" method="POST">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" name="uname" placeholder="Username" class="form-control" required>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="pass" class="form-control" placeholder="masukan Password-lama" required>
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="pass1" class="form-control" placeholder="masukan Password-baru" required>
                  </div>
                  <br>
                    <button type="submit" class="btn btn-primary" value="perbarui_pass"  name="perbarui_pass">Edit</button>
                </form>
              </div>
            </div>
                       
            </div>
</div>  

     <?php
               if (isset($_POST['perbarui_pass'])){
                $uname=mysqli_escape_string($con,$_POST['uname']);
                $pass1=mysqli_escape_string($con,md5($_POST['pass1']));
                $sql =mysqli_query($con, "UPDATE admin SET user_name = '$uname', pass = '$pass1'  WHERE admin . id_admin = '1'");
                echo"<script>alert('Username dan kata sandi berhasil di edit!!');history.go(-1);</script>"; 
               } 
              ?>




 
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
      selector:'textarea'
  });
</script>