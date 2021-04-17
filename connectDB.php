<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectwebpro";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Create Connection for userID
    $con = new mysqli('localhost', 'root', '', 'projectwebpro');

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }

?>