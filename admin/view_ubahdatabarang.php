<?php
include('../layout/header.php');
include('ubahdatabarang.php');

$id = $_GET['kode'];
$sql = $mysqli->query("SELECT * FROM `barang` WHERE `kode`='$id'");
$data = $sql->fetch_assoc();
?>

<form class="col-8" action="ubahdatabarang.php" method="post" enctype="multipart/form-data">
    <p class="h5">Ubah Data Barang</p>
    <hr>
    <div class="form-group">
        <label hidden>Id</label>
        <input type="text" class="form-control" name="kode" value="<?= $data['kode'] ?>" hidden>
    </div>
    <div class="form-group">
        <label>Tipe</label>
        <select type="text" class="form-control" name="tipe" required>
            <option>--Pilih Tipe Barang--</option>
            <option value="Minuman">Minuman</option>
            <option value="Makanan">Makanan</option>
            <option value="Makanan">Lainnya</option>
        </select>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="foto" name="foto" accept=".jpg, .jpeg, .png, .gif">
            <label class="custom-file-label" for="image">Choose file</label>
            <small>
                <font color="red">hanya bisa upload format .jpg, .jpeg, .png, .gif</font>
            </small>
        </div>
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="text" class="form-control" name="harga" value="<?= $data['harga'] ?>" required>
    </div>
    <div class="form-group">
        <label>Stok</label>
        <select type="text" class="form-control" name="stok" required>
            <option>--Pilih Stok--</option>
            <option value="tersedia">Tersedia</option>
            <option value="habis">Habis</option>
        </select>
    </div>

    <input type="submit" class="btn btn-success mt-2" name="ubah" value="Ubah"><br><br><br>
    </div>
</form>

<?php
include('../layout/footer.php');
?>