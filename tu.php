<form method="post">
    <input type="text" name="pass">
    <button type="submit" name="simpan">simpan</button>    
</form>

<?php
include "koneksi/kon.php";

        if (isset($_POST['simpan'])) {
            $pass=md5(mysqli_escape_string($con,$_POST['pass']));
            $pas=mysqli_escape_string($con,$_POST['pass']);
        


            echo $pass ;
            echo "<br></br>";
            echo $pas;
            echo "<br></br>";
                      


         $lg=mysqli_query($con,"SELECT * from admin where pass='$pass'");
            $lgi=mysqli_fetch_array($lg);
        


            
        };
?>
<?php echo $lgi['pass'];?>