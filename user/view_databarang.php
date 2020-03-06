<?php
include('../layout/header.php');
include('databarang.php');
?>

<h5 class="card-header">Data Barang</h5>
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
            </tr>
        <?php $i++;
        endforeach; ?>
    </tbody>
</table>
<br><br><br>

<?php
include('../layout/footer.php');
?>