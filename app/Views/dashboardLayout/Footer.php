<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
    </div>
    <div class="footer-right">
        2.3.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<!-- sweet alert -->
<script src="/template/node_modules/sweetalert/dist/sweetalert2.all.min.js"></script>

<script src="/template/node_modules/jquery/dist/jquery.min.js"></script>
<script src="/template/node_modules/popper.js/dist/popper.min.js"></script>
<script src="/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/template/node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
<script src="/template/node_modules/moment/min/moment.min.js"></script>
<script src="/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="/template/assets/js/stisla.js"></script>





<!-- /*
* --------------------------------------------------------------------
* TABEL BARANG
* --------------------------------------------------------------------
*/ -->
<?php
if ($pagekey === 'product') : ?>
    <?= $this->include('page/Modal') ?>

    <script src="/template/node_modules/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="/MyAssets/Product.js"></script>
<?php endif ?>







<script>
    $('#TabelBarang').DataTable();
</script>

<script src="/MyAssets/ReloadTable.js"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="../assets/js/scripts.js"></script>




<!-- Page Specific JS File -->
</body>

</html>