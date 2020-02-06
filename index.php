<?php
    include "koneksi/kon.php";
  
    session_start();
    ob_start();

    
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>IBRA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bs/css/bootstrap.min.css">
  <link rel="stylesheet"  href="cr/owl.carousel.min.css">
  <link rel="stylesheet"  href="cr/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="style/tu.css">


    <!-- jQuery library -->
    <script src="bs/js/jquery-3.3.1.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bs/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="cr/owl.carousel.min.js"></script>
    <script type="text/javascript" src="tc/tinymce.min.js"></script>
     
 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="#myPage">IBRA AUTO</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li class=" active"> <a href="#ttg">TENTANG SAYA</a></li>
          <li class=" "> <a href="#pdk">PRODUK</a></li>
          <li class=" "> <a href="#hk">INFO LEBIH LANJUT</a></li>  
         <p class="navbar-brand" href="#" style="font-size: 10px;"><?php echo date("l,d,M,Y");?></p> 
          <li data-toggle="modal" data-target="#myLogin" ><a href="#"><span class="glyphicon glyphicon-log-in"></span></a></li>
      </ul>    
    </div>
  </div>
</nav>



<div class="modal fade" id="myLogin" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LOGIN</h4>
              </div>
              <?php
                  if(isset($_POST['login'])){
                    $user_name=mysqli_escape_string($con,$_POST['uname']);
                    $pass=mysqli_escape_string($con,md5($_POST['pass']));

                    $lg=mysqli_query($con,"SELECT * from admin WHERE user_name='$user_name' AND pass='$pass'");
                    $lgi=mysqli_fetch_array($lg);
                     if (!empty($lgi['user_name'])) {
                        $_SESSION['user_name'] = $lgi['user_name'];

                        $_SESSION['id_admin'] = $lgi['id_admin'];

                      if (isset($_SESSION['id_admin']) && $_SESSION['id_admin']=='1'){
                            header('location:admin.php');
                        }
                  }else{
                      echo "<script>alert('nama dan pass salah cuy')</script>";
                    }
                 } 
              ?>
              <div class="modal-body">
                <form action="" method="POST">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" name="uname" placeholder="Username" class="form-control">
                  </div>
                  <br>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                  </div>
                  <br>
                    <button type="submit" class="btn btn-primary" value="Login"  name="login">login</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        











<?php
  $sql=mysqli_query($con,"select * from produk ");
  $a=mysqli_fetch_array($sql);
  ?>
 



  <div id="myCarousel1" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" >
      <div class="item active">
       <img src="img/<?php echo $a['gbr'];?>"   alt="Image" width="1200" height="700">      
        <div class="carousel-caption">
        </div>      
      </div>

      <?php
      $sql1=mysqli_query($con,"select * from produk ");
      while ($b=mysqli_fetch_array($sql1)) {?>
      

      <div class="item">
       <img src="img/<?php echo $b['gbr'];?>"   alt="Image" width="1200" height="700">
        <div class="carousel-caption">
        </div>       
      </div>
    <?php }?>
      
    </div>
  </div>


<!-- Container (The Band Section) -->
<div id="ttg" class="container text-center">
  <?php
              $sql=mysqli_query($con,"SELECT * FROM tentang WHERE id_tentang='1'");
              $data = mysqli_fetch_array($sql);
            ?>
  <br>
<div class="media">
  <div class="row  slideanim">   
    <div class="bg-2">
      <div class="col-sm-3">
        <div class="thumbnail">
          <p class="text-center"><strong></strong></p><br>
           <div class="sticky">
           </div>      
        </div>
      </div>
      <div class="col-sm-6">
        <div class="thumbnail">
           <img src="img/<?php echo $data['foto'];?>"  class="img-thubmnail person" width="100" height="100"  alt="Image"> 
           <br>
          <p class="text-center"><strong><?php echo  $data['judul'];?></strong></p><br>
           <button class=' btn btn-default sticky' style="border-radius: 13px; color: ">
             <a href="#hk"><b>Hubungi Kami</b></a>
           </button> 
            <p><em><?php echo $data['isi'];?></em></p>     
        </div>
      </div>
       <div class="col-sm-3">
        <div class="thumbnail"><br>
          <p class="text-center"><strong></strong></p><br>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="thumbnail">
          <img src="img_uld/howto.jpg" class="img-thubmnail" alt="Random Name" >
        </div>
      </div>
    </div>   
  </div>
</div>  
  
</div>
</div>


<!-- Container (TOUR Section) -->
<div id="pdk" class="bg-1 slideanim">
  <div class="container-fluid">
    <div class="row text-center" id="tamildata" >
      <h3 class="text-center">PRODUK KAMI</h3>
          <?php
                            include "pertama.php";

                        ?>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="hk" class="container">
   <div class="row slideanim">
      <h3 class="text-center"><b>Hubungi Kami</b></h3>
            <p class="text-center"><em>Untuk Mendapatkan Informasi Lebih Lanjut</em></p>
            <br>
              <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#wa">Via Whatsapp <span class="glyphicon glyphicon-phone"></span></a></li>
                <li><a data-toggle="tab" href="#email">Via Email <span class="glyphicon glyphicon-envelope"></span></p>   </a></li>
               </ul>

              <div class="tab-content">
                <div id="wa" class="tab-pane fade in active">
                  <h2>Via Whatshap  </h2><span class="glyphicon glyphicon-phone"></span>
                  <?php
                      $nohp=mysqli_query($con,"SELECT * from tentang");
                      $no=mysqli_fetch_array($nohp);
                  ?>
             
                   <a href="https://api.whatsapp.com/send?phone=6282288708599&text=Hallo%20Agan%20Baik" target="_blank" rel="noopener"> 
                    <?php echo $no['no_hp']?>
                  </a>
                </div>
                <div id="email" class="tab-pane fade">
                  <h2>Via Email</h2><span class="glyphicon glyphicon-envelope"></span></p>   
                
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                      </div>
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                      </div>
                    </div>
                      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                     
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
  </div>
  
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
     <span class="glyphicon glyphicon-copyright-mark"></span> PRE ODOI
</footer>


<script type="text/javascript" src="cr/owl.js"></script>

<script>
    $("#tamildata").on("click",".dtl",function(){
    var id= $(this).attr("id");
    $.ajax({
      url:'halaman/detail.php',
      type:'post',
      data:'id='+id,
      success: function(msg){
        $("#tamildata").hide().fadeIn(1000).html(msg);
      }
    });
    
  });
</script>



<script>
$(document).ready(function(){
  // Initialize Tooltip
  
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".sticky a,.navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top 
      }, 1900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<script>
  tinymce.init({
      selector:'textarea'
  });
</script> 

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel1").carousel({interval: 1400});
    
   
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel1").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel1").carousel("next");
    });
});
</script>


</body>
</html>
