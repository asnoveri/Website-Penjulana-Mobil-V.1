

  <?php
  include "../koneksi/kon.php"; 

  $id= @$_POST['id'];
  $sql=mysqli_query($con,"select * from produk where id_produk='$id'");
  
  $a=mysqli_fetch_array($sql);
  ?>
 



 <div class="container">
    <div id="myCarousel" class="carousel slide slideanim" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
      <div class="item active aj">
       <img src="img/<?php echo $a['gbr'];?>"   alt="Image" width="460" height="345">      
        <div class="carousel-caption">
           <h3><?php echo $a['judul_produk'];?></h3>
        </div>      
      </div>

      <?php
      $sql1=mysqli_query($con,"SELECT * from gbr_mobil where id_produk='$id'");
      while ($b=mysqli_fetch_array($sql1)) {?>
      

      <div class="item aj">
       <img src="img/<?php echo $b['gambar'];?>"   alt="Image" width="460" height="345">
        <div class="carousel-caption">
           <h3><?php echo $a['judul_produk'];?></h3>
        </div>       
      </div>
    <?php }?>
      
    </div>

      <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br>
 </div>


          <!-- Third Container (Grid) -->
              <div class="container  text-center slideanim"id="tamildata" >    
                <h3 class="margin"><b>DESKRIPSI <?php echo $a['judul_produk'];?> </b></h4><br>
                <div class="row" style="margin: 5px; padding: 5px" >
                    
                       <div class="well text-left bg-5"><p><?php echo $a['ket_produk'];?></p></div> 
                </div>
              </div>


        <div class="container-fluid bg-1 slideanim" style=" width: 50%; " >                              
          <h3><b>HARGA DAN TIPE <?php echo $a['judul_produk'];?> </b></h3>
               <div class="table-responsive"> 
             <table class="table table-striped table-hover " style="text-align: left;">
              <thead>
                <tr>
                  <th>TIPE</th> 
                  <th></th>
                  <th></th>   
                  <th>HARGA</th>
                  
                </tr>
              </thead>
             <tbody>
                 <?php
                                  $sql2=mysqli_query($con,"SELECT * from tipe_produk where id_produk='$id'");
                                  while ($c=mysqli_fetch_array($sql2)) { 
                                    $ug=number_format($c['harga'],0,",",".");
              
                echo 
                "<tr>
                  <td>$c[tipe]</td>
                  <td></td>
                  <td></td>
                  <td>Rp. $ug</td>     
                </tr>"
                ;}?>
               </tbody>
            </table>
          </div>
   </div>















<?php

    include"prdk_lain.php";
?>




<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 500});
    
   
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>