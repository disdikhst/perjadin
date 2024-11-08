<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Muhammad Sugeng Wahyudi  <?php echo date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">mau Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih Tombol "Logout" Dibawah ini jika Anda ingin mengakhiri sesi ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
  <script src="<?php echo base_url('assets/'); ?>datatables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>datatables/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script src="<?php echo base_url('assets/'); ?>datatables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>datatables/Buttons-1.6.1/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>datatables/Buttons-1.6.1/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>datatables/Buttons-1.6.1/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>datatables/Buttons-1.6.1/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>datatables/JSZip-2.5.0/jszip.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>datatables/pdfmake-0.1.36/vfs_fonts.js"></script>


  <!-- https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js
https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js
https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js
https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js
https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js  -->



  <script>
$(document).ready(function() {
    var table = $('#dataTable').DataTable( {
       
        buttons: [ 'copy', 'excel', 'print', 'pdf', 'colvis' ],
        lengthMenu:[
            [5,10,25,50,100,-1],
            [5,10,25,50,100,"ALL"]
        ]
    } );
 
    table.buttons().container()
        .appendTo( '#dataTable_wrapper .col-md-6:eq(0)' );
} );
  </script>

  
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>

</body>

</html>