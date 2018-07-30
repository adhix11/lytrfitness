<?php 

    @session_start();
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "lytr_fitness";


    $servername = "localhost";
    $username = "u262060538_lytr";
    $password = "Lytr@123";
    $dbname = "u262060538_lytr";

    




    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

