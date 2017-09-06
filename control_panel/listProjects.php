<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';
//$sql = "select * from usercompany";
$sql = "SELECT tblproject.*, CONCAT(FirstName, ' ', LastName) as c_user, tblcategory.*, usercompany.*, tblusers.* 
        FROM tblproject 
        INNER JOIN tblcategory 
          ON  tblproject.cat_id = tblcategory.cat_id
        INNER JOIN usercompany
        ON tblproject.c_id = usercompany.c_id
        INNER JOIN tblusers
        ON tblproject.UserID = tblusers.UserID order by tblproject.p_id desc ";
$query = new database();
$rows = $query->select_record($sql);
if (@$_GET['projectID']) {
    $id = $_GET['projectID'];
    $sql = "delete from tblproject where p_id = '$id'";
    $query->delete_record($sql);
    redirect('listProjects.php');
} elseif (@$_GET['c_id']) {
    $id = $_GET['c_id'];
    $sql = "SELECT tblproject.*, CONCAT(FirstName, ' ', LastName) as c_user, tblcategory.*, usercompany.*, tblusers.* 
        FROM tblproject 
        INNER JOIN tblcategory 
          ON  tblproject.cat_id = tblcategory.cat_id
        INNER JOIN usercompany
        ON tblproject.c_id = usercompany.c_id
        INNER JOIN tblusers
        ON tblproject.UserID = tblusers.UserID where usercompany.c_id = $id";
        $query = new database();
        $rows = $query->select_record($sql);
} 

$numRows = count($rows);
if ($numRows <= 0) {
    $rows = array();
}
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
        $title = "List Projects";
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
                            <h1 class="page-header">Projects</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List Projects
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Image </th>
                                                <th>Title </th>
                                                <th>Goal Amount</th>
                                                <th>Funding Duration </th>
                                                <th>Category</th>
                                                <th>User</th>
                                                <th>Company</th>
                                                <th>Status</th>
                                                <th>Verification</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><img src="<?php echo 'uploads/project/'.$row['p_photo']; ?>" width="50" /></td>
                                                <td><?php echo $row['p_title']; ?></td>
                                                <td><?php echo $row['p_amount']; ?></td>
                                                <td><?php echo $row['p_duration']; ?></td>
                                                <td><?php echo $row['cat_name']; ?></td>
                                                <td><?php echo $row['c_user']; ?></td>
                                                <td><?php echo $row['c_name']; ?></td>
                                                <td><?php echo ($row['p_status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Inactive</span>'; ?></td>
                                                <td><?php echo ($row['p_verification']==1)?'<span class="label label-success">Verified</span>': '<span class="label label-danger">Not Verified</span>'; ?></td>
                                                <td> <span class="pointer">
                                                      <a  href="editProject.php?projectID=<?php echo $row['p_id']; ?>">
                                                      <i class="fa fa-pencil-square"></i>
                                                      </a>
                                                      </span> |
                                                      <span class="pointer"">
                                                      <a class="deleteCompany" href="listProjects.php?projectID=<?php echo $row['p_id']; ?>">
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
        $('.deleteCompany').on('click', function() {
            if (confirm('Are you sure to delete this project?')) 
                return true;
            else
                return false;
        });
    });
</script>
</body>

</html>
