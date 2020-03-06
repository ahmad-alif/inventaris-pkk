<?php
include('config.php');
$sql = $mysqli->query("SELECT * FROM `barang`");
$data = $sql->fetch_all(MYSQLI_ASSOC);

?>