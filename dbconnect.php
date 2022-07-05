<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "jdb";

    $connect = new mysqli($servername, $username, $password, "$db");


    if($connect ->connect_error){
        die("connection failed");
    }

?>