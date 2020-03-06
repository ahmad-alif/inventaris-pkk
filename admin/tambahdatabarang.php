<?php
include('../config.php');

if(isset($_POST['tambah'])){
    $tipe = $_POST['tipe'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $foto = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];

    move_uploaded_file($file, "../gambar/" . $foto);
    $stmt = $mysqli->prepare("INSERT INTO `barang` (`tipe`, `nama`, `foto`, `harga`, `stok`) VALUES (?,?,?,?,?) ");
    $stmt->bind_param('sssss', $tipe, $nama, $foto, $harga, $stok);
    if ($stmt->execute()) {
        header('location:view_databarang.php');
        exit;
    } else {
        echo "Gagal";
        exit;
    }
    exit;
}