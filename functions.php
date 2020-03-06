<?php

function pesan()
{
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Username atau Password Salah!";
        }
    }
}

function must_login()
{
    if (!isset($_SESSION['username'])) {
        header('location:../login.php');
    }
}
