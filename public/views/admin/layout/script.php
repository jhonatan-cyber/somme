
<script src="<?php echo BASE_URL ?>public/assets/admin/js/jquery.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/popper.min.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/dataTable.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/dataTable.bootstrap.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/perfect-scrollbar.min.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/smooth-scrollbar.min.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/all.min.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/material-dashboard.min.js"></script>


<script src="<?php echo BASE_URL ?>public/assets/admin/js/all-functions.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/toastr.js"></script>
<script src="<?php echo BASE_URL ?>public/assets/admin/js/sweetalert2.min.js"></script>
<script>
    const BASE_URL = '<?php echo BASE_URL ?>';
</script>