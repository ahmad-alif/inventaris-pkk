<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($mysqli, "SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){

    $data = mysqli_fetch_assoc($login);
    
    if($data['level']=="admin"){

        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "admin";
        $_SESSION['is_login'] = true;
        
        header('location:admin/index.php');

    }else if($data['level']=="user"){
        
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "user";
        $_SESSION['is_login'] = true;

        header('location:user/index.php');

    }else if(!password_verify($password)){
        header('location:login.php?pesan=gagal');
    }
}else{
    header('location:login.php?pesan=gagal');
}
