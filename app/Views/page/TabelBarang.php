<?= $this->extend('dashboardLayout/Main'); ?>
<?= $this->section('Content'); ?>


<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Table</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Table</div>
      </div>
    </div>
    <button class="mb-2 btn btn-primary" data-toggle="modal" data-target="#modalBarang">Tambah Barang</button>
    <button class="mb-2 btn btn-success reloadtabel">Reload Tabel</button>
    <div class="search-element">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
      <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      <div class="search-backdrop"></div>
    </div>
    <div class="section-body">
      <h2 class="section-title">Tables</h2>
      <div class="card">
        <div class="card-header">
          <h4>Table Head Options</h4>
        </div>
        <div class="card-body">
          <div class="mt-0 section-title">Data Barang</div>
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
        </div>
      </div>
  </section>
</div>

<?= $this->endSection(); ?>