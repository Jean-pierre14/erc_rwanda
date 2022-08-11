<?php

    include_once "./config.php";

    $email = mysqli_real_escape_string($con, htmlentities(trim($_POST['email'])));
    $pass = 1234;
    $password = md5($pass);

    $checkEmail = mysqli_query($con, "SELECT email FROM admins WHERE email = '{$email}'");

    if(mysqli_num_rows($checkEmail) > 0){
        print $email . " - is taken";
    }else{
        
        $sql = mysqli_query($con, "INSERT INTO admins(email, `password`) VALUE('{$email}', '{$password}')");

        if($sql){
            print "success";
        }else{
            print "Something went wrong";
        }
    }

    
