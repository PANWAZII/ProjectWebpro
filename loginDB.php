<?php 
    session_start();
    include('connectDB.php');

    $errors = array();

    if (isset($_POST['user_login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {           
            $_SESSION['error'] = "Username is required";
            array_push($errors, "Username is required");
        }

        if (empty($password)) { 
            $_SESSION['error'] = "Password is required";
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
            
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) == 1) {
                $sql = $con->query("SELECT id FROM user WHERE username='$username'");
                $data = $sql->fetch_assoc();
                $_SESSION['username'] = $username;
                $_SESSION['userID'] = $data['id'];
                $_SESSION['success'] = "Your are now logged in as ".$username;
                header("location: /ProjectWebpro/loggedin/index.php");
            } else {
                array_push($errors, "Wrong Username or Password");
                $_SESSION['error'] = "Wrong Username or Password!";
                header("location: /ProjectWebpro/login.php");
            }
        } else {
            array_push($errors, "Username & Password is required");
            $_SESSION['error'] = "Username & Password is required";
            header("location: /ProjectWebpro/login.php");
        }
    }
