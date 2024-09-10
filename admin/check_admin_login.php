<?php

include("../config/configure.php");
session_start();
if (isset($_POST['user_sign_in'])) {

    $user_email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
    $user_pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));

    $select_users = "select * from users where email='$user_email' AND 
    password = '$user_pass' AND user_type = 'admin'";

    $query = mysqli_query($con, $select_users);
    $check_user = mysqli_num_rows($query);

    if ($check_user == 1) {
        $_SESSION['email'] = $user_email;
        echo "<script>window.open('admin_home.php', '_self')</script>";
    } else {
        echo "<script>alert('Your Email or Password is incorrect')</script>";
    }
}
