<?php
$sql = mysqli_query($con, "SELECT * FROM produk where id_produk='$_GET[id]'");
$data = mysqli_fetch_array($sql);

?>


<button type="button" class="btn btn-bg"> <span class="glyphicon glyphicon-chevron-left"></span>
      	<a href="?page=prdk">Produk Anda</a>
	</button>      
      <div class="container-fluid ">                                   
        <h3><b>DETAIL DARI <?php echo $data['judul_produk']; ?> </b></h3> 
          <div class="row">
		    <div class="col-sm-6" >
		       <div class=" table-responsive"> 
	            <table class="table ">
	              <thead>
	                <tr>
	                  <th>Merek Produk</th>
	                  <td></td>
	                  <td><?php echo $data['judul_produk']; ?></td> 
	                </tr>
	                <tr>
	                  <th>Deskripsi Produk</th>
	                  <td></td>
	                  <td><?php echo $data['ket_produk']; ?></td>
	                </tr>
	                 <tr>
	                  <th>Status Produk</th>
	                  <td></td>
	                  <td><?php echo $data['status_produk']; ?></td>
	                </tr>
	                <tr>
	                  <th>Foto Produk</th>
	                  <td></td>
	                  <td>
	                  	<img src="img/<?php echo $data['gbr'];?>"  class="img-circle" width="120" height="100"  alt="Image">
	                  </td>
	                </tr>
	                
	              </thead>
	             
	            </table>
	          </div>
		    </div>
		    <div class="col-sm-6" >
		       <div class=" table-responsive"> 
	            <table class="table table-bordered ">
	              <thead>
	              	<h4>Tipe Dan Harga Dari <?php echo $data['judul_produk']; ?> </h4>
	                <tr>
	                  <th style="text-align: center;">NO</th>	
	                  <th style="text-align: center;">Tipe</th>
	                  <th style="text-align: center;">Harga</th> 
	                  <th style="text-align: center;">Action</th> 
	                </tr>
	              </thead>
	              <tbody>
	              				<?php
                                 $no=1;
                                  $sql2=mysqli_query($con,"SELECT * from tipe_produk where id_produk='$_GET[id]'");
                                  while ($c=mysqli_fetch_array($sql2)) { 
                                    $ug=number_format($c['harga'],0,",",".");
                                    		?>
	                               
					                <tr>
					                  <td><?php echo $no ?></td>	
					                  <td><?php echo $c['tipe']?></td>
					                  <td> Rp.<?php echo $ug?></td>     
					                  <td class="btn-group-vertical" >
									    <button type="button" class="btn btn-info">
				                        		<a href="?page=edittipe&kd=<?php echo$c['id_tipe']?>&id=<?php echo$data['id_produk']?>">EDIT</a>
				                    	</button>
				        				<button type="button" class="btn btn-warning">
				                        		<a href="?page=hapustipe&kd=<?php echo$c['id_tipe']?>&id=<?php echo$data['id_produk']?>">HAPUS</a>
				                    	</button>
				                		</td>  
					                </tr>
					               
					              <?php 
					               $no++;}?>
					             
	              </tbody>
	            </table>

      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Tambah Tipe Produk</button>
				  <div id="demo" class="collapse">
				  <form action="" method="POST" enctype="multipart/form-data">  
                       <h3>Tipe & Harga Produk Ke <?php echo $no++?></h3>
                      <div class="form-group">
                        <label for="">Tipe Produk</label>
                          <input  type="hidden"   name="id_produk"  value="<?php  echo $data['id_produk'];?>">
                        <input type="text"   name="tipe[]" class="form-control"  placeholder="" required="">
                      </div>
                      <div class="form-group">
                        <label for="">Harga Produk</label>
                        <input type="number"  name="harga[]" class="form-control"  placeholder="" required="">
                      </div>
                      <button type="button" id="btn-tambah-form" class="btn ">Tambah Data Form</button>
                      <button type="button" id="btn-reset-form" class="btn btn-success">Reset Form</button>
                       <div id="insert-form"></div>
                       <br>
                      <button type="submit" class="btn btn-primary" value="simpan1"  name="simpan1">Simpan</button>
                    </form>
                    <input type="hidden" id="jumlah-form" value="<?php echo $no++;?>"></div>
	           	
	          </div>
	          <?php
	          if (isset($_POST["simpan1"])) {
	          $id_produk=mysqli_escape_string($con,$_POST['id_produk']);	
	          $tipe=$_POST['tipe'];
              $harga=$_POST['harga'];
              $query="INSERT INTO tipe_produk (id_produk,tipe,Harga) VALUES";

              $index=0;
              foreach ($tipe as $data_produk) {
                $query.="('".$id_produk."','".$data_produk."','".$harga[$index]."'),";
                $index++;
                // echo $query;-> untuk melihat query multi data y dipost


              }

             $query = substr($query, 0, strlen($query) - 1).";";
              mysqli_query($con,$query);
              echo "<script>alert('Data berhasil disimpan');window.location = '?page=detail&id=$_GET[id]';</script>";
         

        
           }

       ?>

	        
		    </div>
		  </div>	
   </div>

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
        "<input type='text'  name='harga[]'' class='form-control'   required>"+
        "<button type='submit' class='btn btn-primary' value='simpan1'  name='simpan1'>Simpan</button>"+
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
