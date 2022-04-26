<?= $this->extend('Component/Main'); ?>
<?= $this->section('Content'); ?>


<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Table</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
        <div class="breadcrumb-item">Table</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Tables</h2>
      <button class="btn btn-primary mb-2">Tambah Barang</button>
      <div class="card">
        <div class="card-header">
          <h4>Table Head Options</h4>
        </div>
        <div class="card-body">
          <div class="section-title mt-0">Data Barang</div>
          <table class="table" id="TabelBarang">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Harga Dasar</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Total</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Klip mio</td>
                <td>300</td>
                <td>170</td>
                <td>600</td>
                <td>24000</td>
                <td>
                  <button class="btn btn-danger">Hapus</button>
                  <button class="btn btn-info">Edit</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Klip mio</td>
                <td>300</td>
                <td>170</td>
                <td>600</td>
                <td>24000</td>
                <td>
                  <button class="btn btn-danger">Hapus</button>
                  <button class="btn btn-info">Edit</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Klip mio</td>
                <td>300</td>
                <td>170</td>
                <td>600</td>
                <td>24000</td>
                <td>
                  <button class="btn btn-danger">Hapus</button>
                  <button class="btn btn-info">Edit</button>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
  </section>
</div>

<?= $this->endSection(); ?>