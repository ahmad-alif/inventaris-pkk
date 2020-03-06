<?php
session_start();

include('../functions.php');

must_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/css/simple-sidebar.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Toko Sejahtera</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1"><a href="index.php">Toko Sejahtera</a></span>
        <a class="btn btn-danger mr-2" href="../logout.php">Logout</a>
    </nav>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
                <?php if ($_SESSION['level'] == 'admin') { ?>
                    <a href="view_databarang.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-inbox mr-2"></i>Data Barang</a>
                    <a href="view_laporan.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-clipboard mr-2"></i>Laporan</a>
                <?php } else if ($_SESSION['level'] == 'user') { ?>
                    <a href="view_databarang.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-inbox mr-2"></i>Data Barang</a>
                <?php } ?>
            </div>
        </div>
        <div class="container mt-3">