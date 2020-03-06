<?php
include('../layout/header.php');
include('databarang.php');
?>

<h5 class="card-header">Data Barang</h5>
<a class="btn btn-success mt-2" href="view_tambahbarang.php">Tambah Barang</a>
<table class="table table-hover mt-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode</th>
            <th scope="col">Tipe</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Gambar</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($barang as $b) : ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $b['kode']; ?></td>
                <td><?php echo $b['tipe']; ?></td>
                <td><?php echo $b['nama']; ?></td>
                <td><img src="../gambar/<?php echo $b['foto']; ?>" height="80px" width="80px"></td>
                <td><?php echo $b['harga']; ?></td>
                <td><?php echo $b['stok']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm col-9" href="view_ubahdatabarang.php?kode=<?= $b['kode'] ?>">Ubah</a><br>
                    <a class="btn btn-danger btn-sm mt-1 col-9" href="databarang.php?action=hapus&kode=<?= $b['kode'] ?>">Hapus</a><br>
                </td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </tbody>
</table>
<br><br><br>

<?php
include('../layout/footer.php');
?>