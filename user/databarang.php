<?php

include('../config.php');

$result = $mysqli->query("SELECT * FROM `barang` ORDER BY `kode` ASC");
$barang = $result->fetch_all(MYSQLI_ASSOC);
