<?php 

    $conn = mysqli_connect("localhost","root","","pglife");
    
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL! Please contact the admin";
        return;
    }
