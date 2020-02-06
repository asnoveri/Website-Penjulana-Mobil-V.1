<div class="wrapper slideanim"> 
  <h3 class="margin "><b>Produk Lain</b></h3><br>
                      <div class="owl-carousel owl-teheme">
                        <?php
                            $sql1=mysqli_query($con,"SELECT * FROM produk");
                            while ($a=mysqli_fetch_array($sql1)) {?>    
                        <div class="itema"><img src="img/<?php echo $a['gbr'];?>" class="img-thumbnail"   alt="Image">
                              <button class='dtl' id=<?php echo $a['id_produk'];?>><?php echo $a['judul_produk'];?>
                              </button>
                               
                        </div>
                      <?php }?>  
                     </div>
                     
                  </div>


<script type="text/javascript">
  
    $(".owl-carousel").owlCarousel({
      autoplay:true,
      autoplayTimeout:1100,
      autoplayHoverPause:true,
      loop:true,
      margin:10,
      nav:true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:3
        },
        1000:{
          items:4
        }
      }
    })
</script>

