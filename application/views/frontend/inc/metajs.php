<!--====== Javascripts & Jquery ======-->
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.slicknav.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/eonasdan-bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js " charset="utf-8"></script>




<script>
$("#timepicker").datetimepicker({
 format: "LT",
 icons: {
   up: "fa fa-chevron-up",
   down: "fa fa-chevron-down"
 }
});
$("#timepicker2").datetimepicker({
 format: "LT",
 icons: {
   up: "fa fa-chevron-up",
   down: "fa fa-chevron-down"
 }
});
$("#timepicker3").datetimepicker({
 format: "LT",
 icons: {
   up: "fa fa-chevron-up",
   down: "fa fa-chevron-down"
 }
});
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
