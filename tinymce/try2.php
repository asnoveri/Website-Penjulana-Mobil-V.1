<div class="container-fluid ">                              
        <h3><b>Tambahkan Data Produk Anda</b></h3> 
          <div class="row">
        <div class="col-sm-6" >
              <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="">Merek Produk</label>
                        <input type="text" name="judul_produk" class="form-control"  placeholder="judul"  required >
                      </div>
                      <div class="form-group">
                        <label for="">Foto Produk</label>
                        <input type="file"  name="gbr" class="form-control" required  >
                      </div>
                      <div class="form-group">
                        <label for="">Deskripsi Produk</label>
                       <textarea class="form-control" name="ket_produk" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary" value="simpan"  name="simpan">Simpan</button>
                    </form>
                 </div>
        </div>

        <?php
          if(isset($_POST['simpan'])){
            $judul_produk=mysqli_escape_string($con,$_POST['judul_produk']);
            $ket_produk=mysqli_escape_string($con,$_POST['ket_produk']);
            $fileName = $_FILES['gbr']['name'];

            $sql =mysqli_query($con, "INSERT INTO produk (id_produk, judul_produk, gbr, ket_produk) VALUES ('', '$judul_produk', '$fileName', '$ket_produk');");
                  move_uploaded_file($_FILES['gbr']['tmp_name'], "img/".$_FILES['gbr']['name']);
                  // echo"<script>alert('Data Berhasil Ditambahkan !');history.go(-1);</script>"; 
          
           if ($sql){
              $id_produk = mysqli_query($con, "SELECT max(produk.id_produk) as id_produk FROM produk");
                $id = mysqli_fetch_array($id_produk);
              }

          }
          if (isset($id['id_produk'])){
            $idprodu = $id['id_produk'];
        }else{
            $idprodu ="";
        }
        ?>
       <?php
          if (isset($_POST["simpan1"])) {
            $id_produk=mysqli_escape_string($con,$_POST['id_produk']);
            $jumlah = count($_FILES['gambar']['name']);
            if ($jumlah > 0) {
              for ($i=0; $i < $jumlah; $i++) { 
                $file_name = $_FILES['gambar']['name'][$i];
                $tmp_name = $_FILES['gambar']['tmp_name'][$i];        
               move_uploaded_file($tmp_name, "img/".$file_name);
                $g=mysqli_query($con,"INSERT INTO gbr_mobil(id_gambar,id_produk,gambar) VALUES('','$id_produk','$file_name')");       
              }
            }
             $tipe=mysqli_fetch_array($con,$_POST['tipe']);
             $harga=mysqli_fetch_array($con,$_POST['harga']);

              $quer="INSERT INTO tipe_produk values";

              $index=0;
              foreach ($id_produk as $data_produk) {
                $quer.="('".$data_produk."','".$tipe[$index]."','".$Harga[$index]."'),";
                $index++;
                
              }
              $quer=substr($quer,0,starlen($quer) -1).";";
              mysqli_query($con,$quer);
              echo "<script>alert('Data berhasil disimpan');window.location = 'produk.php';</script>";
            

         
           }
       ?>
        <div class="col-sm-6" >
          <div class="modal-body">
                    <form action="" method="POST" enctype="multipart/form-data">  
                        <input  type="text"  name="id_produk"  value="<?php echo $idprodu;?>">
                      <div class="form-group">
                        <label for="">Foto Produk</label>
                        <input type="file"  name="gambar[]" multiple class="form-control"  placeholder="" required="">
                      </div>
                        <h3>Tipe & Harga Produk Ke 1</h3>
                      <div class="form-group">
                        <label for="">Tipe Produk</label>
                        <input type="text"  name="tipe[]" class="form-control"  placeholder="" required="">
                      </div>
                      <div class="form-group">
                        <label for="">Harga Produk</label>
                        <input type="text"  name="harga[]" class="form-control"  placeholder="" required="">
                      </div>
                      <button type="button" id="btn-tambah-form" class="btn ">Tambah Data Form</button>
                      <button type="button" id="btn-reset-form" class="btn btn-success">Reset Form</button>
                       <div id="insert-form"></div>
                       <br>
                      <button type="submit" class="btn btn-primary" value="simpan1"  name="simpan1">Simpan</button>
                    </form>
                      <input type="hidden" id="jumlah-form" value="1">
          </div>
        </div>
      </div>  
   </div>


<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
      selector:'textarea'
  });
</script>

<script>
  $(document).ready(function(){ // Ketika halaman sudah diload dan siap
    $("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
      var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
      var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
      
      // Kita akan menambahkan form dengan menggunakan append
      // pada sebuah tag div yg kita beri id insert-form
      $("#insert-form").append("<h3>Tipe & Harga Produk Ke  " + nextform + " :</h3>" +
        "<div class=form-group>"+
        "<label for=''>Tipe Produk</label>"+
        "<input type='text'  name='tipe[]'' class='form-control'   required>"+
        "</div>"+
        "<div class=form-group>"+
        "<label for=''>Harga Produk</label>"+
        "<input type='text'  name='Harga[]'' class='form-control'   required>"+
        "</div>"+
        "<br><br>");
      
      $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
    });
    
    // Buat fungsi untuk mereset form ke semula
    $("#btn-reset-form").click(function(){
      $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
      $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
    });
  });
  </script>

