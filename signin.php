<?php
    $con = mysqli_connect('localhost', 'root', '', 'makdb');
    
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];

    $q = "SELECT * from `users` where `email` = '$email' and `password` = '$pswd';";
    $res = mysqli_query($con, $q);

    // Authentication
    if(mysqli_num_rows($res) > 0){
        echo 'login success';

        // Authorization 
        $user = mysqli_fetch_assoc($res);
        if($user['role'] == 'User'){
            header('location: user/');
            die;
        } 
        else if($user['role'] == 'Admin'){
            header('location: admin/index.php');
            die;
        }

    } else {
        echo 'login failed';
    }

?>