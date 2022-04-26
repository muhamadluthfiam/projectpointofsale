<table class="table" id="TabelBarang">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Kategori Barang</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">Harga Dasar</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Total</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($product as $row) : ?>
            <tr>
                <td scope="row"><?= $i++; ?></td>
                <td><?= $row['nama_product']; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td><?= $row['jumlah_product']; ?></td>
                <td><?= $row['harga_product']; ?></td>
                <td><?= $row['harga_jual']; ?></td>
                <td>
                    <?=
                    (int) $row['jumlah_product'] * (int) $row['harga_product'];
                    ?>
                </td>
                <td>
                    <button class="btn btn-danger hapusBarang" href="/hapus-barang" data-id="<?= $row['id']; ?>">Hapus</button>
                    <button class="btn btn-info editBarang" data-id=<?= $row['id']; ?>>Edit</button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>