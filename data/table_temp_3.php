<?php
    // Database credentials
    $servername = "den1.mysql5.gear.host";
    $username   = "tc1004bjesus";
    $password   = "Cw93Z-932g-4";
    $dbname     = "tc1004bjesus";
    $tbname     = "sensor_temp_3";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>