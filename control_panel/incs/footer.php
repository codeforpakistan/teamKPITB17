<?php if(!defined("allow")) {exit(include 'index.php');} ?>
 <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="bower_components/raphael/raphael-min.js"></script>
    <script src="bower_components/morrisjs/morris.min.js"></script>
     <!-- <script src="js/morris-data.js"></script>  -->

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

    <!-- Datatables -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <!-- Datetimepickers -->
    <script src="bower_components/datetimepickers/js/moment.js"></script>
    <script src="bower_components/datetimepickers/js/bootstrap-datetimepicker.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable();
        $('#datetime').datetimepicker({
            format: 'YYYY-MM-DD hh:mm:ss'
                });
    })
</script>