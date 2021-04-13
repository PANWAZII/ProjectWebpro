<?php
session_start();
include('connectDB.php');

$errors = array();

if (isset($_POST['user_register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password2']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);

    if (empty($username)) {
        array_push($errors, "Username is required");
        $_SESSION['error'] = "Username is empty";
    }

    if (empty($email)) {
        array_push($errors, "Email is empty");
        $_SESSION['error'] = "Email is empty";
    }

    if (empty($password_1)) {
        array_push($errors, "Password is required");
        $_SESSION['success'] = "Password is required";
    }

    if ($password_1 != $password_2) {
        array_push($errors, "Password is not match");
        $_SESSION['error'] = "Password is not match";
    }

    $user_check_query = " SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1 ";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
        if ($result['username'] === $username) {
            array_push($errors, "Username already exists");
            $_SESSION['error'] = "Username already exists";
        }
    }

    if ($result) {
        if ($result['email'] === $email) {
            array_push($errors, "Email already exists");
            $_SESSION['error'] = "Email already exists";
        }
    }

    if (count($errors) == 0) {
        $password = $password_1;

        $sql = "INSERT INTO user (username ,email, password, firstname, lastname) 
            VALUES ('$username','$email', '$password','$firstname','$lastname')";
        mysqli_query($conn, $sql);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: /ProjectWebpro/loggedin/index.php');
    } else {
        header("location: register.php");
    }
}
?>