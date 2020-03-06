<?php
include('../config.php');

if(isset($_POST['ubah'])) {
    $id = $_POST['kode'];
    $tipe = $_POST['tipe'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $foto = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];

    move_uploaded_file($file, "../gambar/" . $foto);
    $stmt = $mysqli->prepare("UPDATE `barang` SET `tipe` = ?, `nama`=?, `foto`=?, `harga`=?, `stok`=? WHERE `kode`=?");
    $stmt->bind_param('ssssss', $tipe, $nama, $foto, $harga, $stok, $id);
    if ($stmt->execute()) {
        header('location:view_databarang.php');
        exit;
    } else {
        echo "Gagal";
        exit;
    }
    exit;
}
