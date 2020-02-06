      
      <div class="container-fluid "   >                              
          <h3><b>Produk Anda </b></h3>
          <p><i><marquee>NOTE: Jika Produk Telah Terjual Atau Stocknya Kosong Silahkan Hapus Data Produk</marquee></i></p>
          <button type="button" class="btn btn-info"><a href="?page=tambah">Tambah Produk</a> 
           </button>     
               <div class=" table-responsive"> 
             <table class="table table-bordered">
              <thead>
                <tr>
                  <th width="200" >NAMA PRODUK</th> 
                  <th>Gambar Produk</th>
                  <th>Keterangan Produk</th>
                  <th width="100" style="text-align: center;">AKSI</th> 
                </tr>
              </thead>
                  <?php
        $sql1=mysqli_query($con,"SELECT * FROM produk");
        while ($a=mysqli_fetch_array($sql1)) {?>          
             <tbody>
                <tr>
                	<td><?php echo $a['judul_produk'];?></td>
                	<td style="text-align: center;">
                   <a href="?page=edit_foto&id=<?php echo$a['id_produk']?>"  data-toggle="tooltip"  data-placement="top" title=" Edit Gambar Produk ">
                      <img src="img/<?php echo $a['gbr'];?>"  class="img-circle" width="120" height="100"  alt="Image" >
                   </a> 
                  </td>
                	<td><?php echo $a['ket_produk'];?></td>
                	<td class="btn-group-vertical" >
      					  	  <button type="button" class="btn btn-info">
                            <a href="?page=detail&id=<?php echo$a['id_produk']?>">Detail</a> 
                      </button>
					           <button type="button" class="btn btn-success">
                          <a href="?page=edit&id=<?php echo$a['id_produk']?>" >EDIT</a>
        					   </button>
        					   <button type="button" class="btn btn-warning">
                          <a href="?page=hapus&id=<?php echo$a['id_produk']?>">HAPUS</a>
                     </button>
                	</td>  
                </tr>	         
                	<?php }?>
              </tbody>
            </table>
          </div>
   </div>
  
 
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
  <script>
  tinymce.init({
      selector:'textarea'
  });
</script>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
