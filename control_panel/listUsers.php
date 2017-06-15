<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';
$sql = "select * from tblusers order by date desc";
$query = new database();
$rows = $query->select_record($sql);
if (@$_GET['userID']) {
    $id = $_GET['userID'];
    $sql = "delete from tblusers where UserID = '$id'";
    $query->delete_record($sql);
    redirect('listUsers.php');
}
$numRows = count($rows);
if ($numRows <= 0) {
    $rows = array();
}
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "ListUsers";
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
                <!--     <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Users</h1>
                            <a href="addUser.php">
                            <div style="margin: 5px 0px;" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span>Add User</div></a>
                        </div>
                        
                    </div> -->
                    <!-- /.row -->
            <div class="row">

                        <div class="col-lg-12">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List Users
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['FirstName']; ?></td>
                                                <td><?php echo $row['LastName']; ?></td>
                                                <td><a href="listCompanies.php?UserID=<?php echo $row['UserID']; ?>"><?php echo $row['Email']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo ($row['status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Inactive</span>'; ?></td>
                                                <td> <span class="pointer">
                                                      <a  href="editUser.php?userID=<?php echo $row['UserID']; ?>">
                                                      <i class="fa fa-pencil-square"></i>
                                                      </a>
                                                      </span> |
                                                      <span class="pointer"">
                                                      <a class="deleteUser" href="listUsers.php?userID=<?php echo $row['UserID']; ?>">
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
        $('.deleteUser').on('click', function() {
            if (confirm('Are you sure to delete this user?')) 
                return true;
            else
                return false;
        });
    });
</script>
</body>

</html>
