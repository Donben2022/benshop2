<?php
  
  $conn = mysqli_connect("localhost","root","","benshop2");
    // Check connection

    //$conn = mysqli_connect("localhost","benshopc_user","3rO~(=Q37P9-","benshopc_new");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>