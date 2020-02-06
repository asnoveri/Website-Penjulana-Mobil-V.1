<?php
            if (isset($_GET['page'])){
                $view =  'halaman_admin/'.$_GET['page'].'.php';

                if (file_exists($view)){
                    include "$view";
                }else{
                    echo"<script>alert('Halaman Tidak Di temukan')
					window.location=('admin.php')</script>";
                }
            }
            else{
                        include "halaman_admin/tentang.php";
                    }
            ?>