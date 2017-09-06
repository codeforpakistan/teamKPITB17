<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';
$sql = "select * from tblbackers";
$query = new database();
$rows = $query->select_record($sql);
if (@$_GET['backerID']) {
    $id = $_GET['backerID'];
    $sql = "delete from tblbackers where id = '$id'";
    $query->delete_record($sql);
    redirect('listBackers.php');
}
$numRows = count($rows);
if ($numRows <= 0) {
    $rows = array();
}
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "List Backers";
        require_once 'incs/head.php';
    ?>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php
            require_once 'incs/menu.php';
        ?>
         <div id="page-wrapper">
             <?php
                         
                echo_message();

            ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Backers</h1>
                            <a href="addBacker.php">
                            <div style="margin: 5px 0px;" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Add Backer</div></a>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">

                        <div class="col-lg-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List Backers
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['title']; ?></td>

                                                <td><img src="<?php echo 'uploads/backers/'.$row['img']; ?>" width="100"></td>
                                                <td> <span class="pointer">
                                                      <a  href="editBacker.php?backerID=<?php echo $row['id']; ?>">
                                                      <i class="fa fa-pencil-square"></i>
                                                      </a>
                                                      </span> |
                                                      <span class="pointer"">
                                                      <a class="deleteBacker" href="listBackers.php?backerID=<?php echo $row['id']; ?>">
                                                      <i class="fa fa-trash-o"></i>
                                                      </a>
                                                      </span></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                              
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    </div><!-- /.wrapper -->

    <?php
   	require_once 'incs/footer.php';
   ?>
<script>
    $(document).ready(function() {
        $('.deleteBacker').on('click', function() {
            if (confirm('Are you sure to delete this backer?')) 
                return true;
            else
                return false;
        });
    });
</script>
</body>

</html>
