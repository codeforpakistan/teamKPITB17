<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';
$sql = "select * from tblcategory order by cat_id desc";
$query = new database();
$rows = $query->select_record($sql);
if (@$_GET['categoryID']) {
    $id = $_GET['categoryID'];
    $sql = "delete from tblcategory where cat_id = '$id'";
    $query->delete_record($sql);
    redirect('listCategories.php');
}
$numRows = count($rows);
if ($numRows <= 0) {
    $rows = array();
}
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "List Categories";
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
                            <h1 class="page-header">Categories</h1>
                            <a href="addCategory.php">
                            <div style="margin: 5px 0px;" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Add Category</div></a>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">

                        <div class="col-lg-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List Categories
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Category Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['cat_name']; ?></td>
                                                <td><?php echo ($row['cat_status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Inactive</span>'; ?></td>
                                                <td> <span class="pointer">
                                                      <a  href="editCategory.php?categoryID=<?php echo $row['cat_id']; ?>">
                                                      <i class="fa fa-pencil-square"></i>
                                                      </a>
                                                      </span> |
                                                      <span class="pointer"">
                                                      <a class="deleteCategory" href="listCategories.php?categoryID=<?php echo $row['cat_id']; ?>">
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
        $('.deleteCategory').on('click', function() {
            if (confirm('Are you sure to delete this record.?')) 
                return true;
            else
                return false;
        });
    });
</script>
</body>

</html>
