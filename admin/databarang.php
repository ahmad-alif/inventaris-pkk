<?php

include('../config.php');

switch (isset($_GET['action']) ? $_GET['action'] : null) {
    case 'edit':
        $tipe = $_POST['tipe'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $stmt = $mysqli->prepare("UPDATE `barang` SET `tipe` = ?, `nama`=?, `harga`=?, `stok`=? WHERE `kode`=?");
        $id = $_GET['kode'];
        $stmt->bind_param('ssssi', $tipe, $nama, $harga, $stok, $id);
        if ($stmt->execute()) {
            header('location:view_databarang.php');
            exit;
        } else {
            echo "Gagal";
            exit;
        }
        exit;
        $result = $mysqli->query("SELECT * FROM `barang` ORDER BY `kode` ASC");
        $pengaduan = $result->fetch_all(MYSQLI_ASSOC);
        break;
    case 'hapus':
        $id = $_GET['kode'];

        $result = $mysqli->query("DELETE FROM `barang` WHERE `kode`=$id");
        header('location:view_databarang.php');
}
$result = $mysqli->query("SELECT * FROM `barang` ORDER BY `kode` ASC");
$barang = $result->fetch_all(MYSQLI_ASSOC);
