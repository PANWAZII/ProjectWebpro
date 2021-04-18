<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectwebpro";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Create Connection for userID
    $con = new mysqli('localhost', 'root', '', 'projectwebpro');
    // Create Connection for comment
    $conforcmt = new PDO("mysql:host={$servername};dbname={$dbname};", $username, $password);
    $conforcmt->exec("set names utf8");
    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }

?>