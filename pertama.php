 <?php
        $sql1=mysqli_query($con,"SELECT * FROM produk");
        while ($a=mysqli_fetch_array($sql1)) {?>     
       
      <div class="col-sm-4">
        <div class="thumbnail" data-toggle="tooltip"  data-placement="top" title="Produk <?php echo $a['status_produk'];?>">
            <img src="img/<?php echo $a['gbr'];?>" alt="Image" width="400" height="300">
          <button class='dtl' id=<?php echo $a['id_produk'];?>><?php echo $a['judul_produk'];?></button> 
        </div>
      </div>
<?php }?>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
