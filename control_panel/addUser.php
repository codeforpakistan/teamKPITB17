<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';

$id = @$_GET['userID'];
$sql = "select * from tblusers where UserID=$id";
$query = new database();
$row = @$query->select_one_record($sql);
if ($_POST) {
        $fields = array('FirstName', 'LastName','Email', 'NickName', 'date', 'Role_ID', 'status');
        $sql = $query->insert_record('tblusers', $fields);

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record created successfully";
        } else {
            $_SESSION['error'] = "Error created record: " . mysqli_error($connect);
        }
        redirect('listUsers.php');
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
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add User
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form role="form" action="" method="post">
                                    <input type="hidden" name="UserID" value="<?php echo $row['UserID']; ?>" />
                                    <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>First Name</label>
                                                <input class="form-control" name="FirstName" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Last Name</label>
                                                <input class="form-control" name="LastName" placeholder="Last Name" >
                                            </div>
                                            
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Email</label>
                                                <input class="form-control" name="Email" >
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Nick Name</label>
                                                <input class="form-control" name="NickName" placeholder="NickName">
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>User Role</label>
                                                <select class="form-control" name="Role_ID">
                                                    <option value="1">User</option>
                                                    <option value="2">Admin</option>
                                                </select>
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
                                                </select>
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Date</label>
                                                <input class="form-control" name="date">
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                                <button type="reset" class="btn btn-default">Reset Button</button>
                                            </div>
                                        </div>
                                    </form>
                              
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
