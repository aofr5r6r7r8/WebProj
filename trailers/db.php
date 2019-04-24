<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trailer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8"); //เซ็ตค่าให้รองรับภาษาไทย
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
           // echo "Connected successfully";
    }

?>
