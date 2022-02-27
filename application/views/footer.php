</div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url() ?>assets/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
    <script src="<?php echo base_url() ?>assets/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url() ?>assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url() ?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url() ?>assets/js/sweetalert.js"></script>


  <!-- Page Specific JS File -->
  <script>
    $('.btn-del').on('click',function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            title: 'hapus data antrian ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'delete'
        }).then((result) => {
            if (result.value) {
            document.location.href = href;
            }
        })
        })
    </script>
</body>
</html>