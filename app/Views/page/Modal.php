<!-- Modal -->
<div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="modalBarang" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-submit-barang">
                    <div class="form-group">
                        <label for="namabarang">Nama barang</label>
                        <input type="text" id="namabarang" class="form-control" name="namabarang">
                        <div class="invalid-feedback" id="invalid-nama-barang"></div>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Barang</label>
                        <select name="kategori" class="form-control" id="kategori">
                            <option>1. Baut Kuning</option>
                            <option>2. Baut Motor</option>
                            <option>3. Per</option>
                            <option>4. Karet karet</option>
                        </select>
                        <div class="invalid-feedback" id="invalid-kategori"></div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">jumlah Barang</label>
                        <input type="text" class="form-control" name="jumlah" id="jumlah">
                        <div class="invalid-feedback" id="invalid-jumlah"></div>
                    </div>
                    <div class="form-group">
                        <label for="hargabarang">Harga Barang</label>
                        <input type="number" class="form-control" name="harga" id="harga">
                        <div class="invalid-feedback" id="invalid-harga"></div>
                    </div>
                    <div class="form-group">
                        <label for="hargaJual">Harga jual</label>
                        <input type="number" class="form-control" name="hargaJual" id="hargaJual">
                        <div class="invalid-feedback" id="invalid-hargaJual"></div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MODAL EDIT -->

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="editnamabarang">Nama barang</label>
                        <input type="text" id="editnamabarang" class="form-control" name="editnamabarang">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Barang</label>
                        <select name="kategori" class="form-control" id="kategori">
                            <option>1. Baut Kuning</option>
                            <option>2. Baut Motor</option>
                            <option>3. Per</option>
                            <option>4. Karet karet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editjumlah">jumlah Barang</label>
                        <input type="text" class="form-control" name="jumlah" id="editjumlah">
                    </div>
                    <div class="form-group">
                        <label for="edithargabarang">Harga Barang</label>
                        <input type="number" class="form-control" name="harga" id="editharga">
                    </div>
                    <div class="form-group">
                        <label for="edithargaJual">Harga jual</label>
                        <input type="number" class="form-control" name="hargaJual" id="edithargaJual">
                    </div>
                    <input type="hidden" id="idBarang" name="id">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>