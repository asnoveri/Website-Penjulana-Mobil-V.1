<?php
		session_start();
    	include "koneksi/kon.php";

   		if(empty($_SESSION['user_name'])){
		echo"<script>alert('login dulu')
		window.location=('index.php')</script>";
	}

		 if (isset($_GET['logout'])){
        session_destroy();
        header('location:index.php');
    }

?>









<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IBRA CARS</title>
   <link href="favicon.ico" rel="shortcut icon" /> 
	<link rel="stylesheet" href="bs/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/gaya.css">

		<!-- jQuery library -->
		<script src="bs/js/jquery-3.3.1.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="bs/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
      
  <nav class="navbar navbar-inverse navbar-fixed-top head ">
    <div class="container-fluid">
         <a class="navbar-brand" href="#">SELAMAT DATANG <?php echo $_SESSION['user_name']; ?></a>  
            <div class="navbar-right" >
                <p class="navbar-brand" href="#" style="font-size: 10px;"><?php echo date("l,d,M,Y");?></p> 
            </div>

    </div>
  </nav>
  
  <div class="container-fluid text-center ">    
    <div class="row content">
      <div class="col-sm-2 sidenav menu_kiri">
        <p><a href="?page=tentang">PROFIL ANDA</a></p>
        <p><a href="?page=prdk">PRODUK ANDA</a></p>
        <p><a href="?logout=y">keluar<span class="glyphicon glyphicon-log-in"></span></a></p>
       
      </div>
      <div class="col-sm-10.1 text-left isi" > 
          
          <?php include "menu.php" ?>

      </div>
    </div>
  </div>

<!-- <footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
     <span class="glyphicon glyphicon-copyright-mark"></span> PRE ODOI
</footer> -->
    
 

          

  <!-- Footer -->



<script>
$(document).ready(function(){
  // Initialize Tooltip
  
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

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
})
</script>

</body>
</html>
