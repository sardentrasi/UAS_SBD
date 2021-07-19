<?php 
    $host = "localhost"; 
    $user = "root"; 
    $pass = "spasi"; 
    $db = "fajar_311910666"; 

    $conn = mysqli_connect($host, $user, $pass, $db); 
    if ($conn == false) 
    {echo "Koneksi ke server gagal."; 
        die(); 
        } else 
?>
