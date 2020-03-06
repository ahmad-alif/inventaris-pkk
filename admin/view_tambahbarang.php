<?php
include('../layout/header.php');
include('databarang.php');
?>

<form class="col-8" action="tambahdatabarang.php" method="post" enctype="multipart/form-data">
    <p class="h5">Tambah Data Barang</p>
    <hr>
    <div class="form-group">
        <label>Tipe</label>
        <select type="text" class="form-control" name="tipe" required>
            <option>--Pilih Tipe Barang--</option>
            <option value="Minuman">Minuman</option>
            <option value="Makanan">Makanan</option>
            <option value="Minuman">Lainnya</option>
        </select>
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama .." required>
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
        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga .." required>
    </div>
    <div class="form-group">
        <label>Stok</label>
        <select type="text" class="form-control" name="stok"required>
            <option>--Pilih Stok--</option>
            <option value="tersedia">Tersedia</option>
            <option value="habis">Habis</option>
        </select>
    </div>

    <input type="submit" class="btn btn-success mt-2" name="tambah" value="Tambah">
    </div>
</form>

<?php
include('../layout/footer.php');
?>