<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';
//$sql = "select * from usercompany";
$sql = "SELECT usercompany.*,CONCAT(FirstName, ' ', LastName) as c_user, tblusers.* 
        FROM usercompany 
        INNER JOIN tblusers 
          ON  usercompany.UserID = tblusers.UserID order by usercompany.c_id desc";
$query = new database();
$rows = $query->select_record($sql);
if (@$_GET['companyID']) {
    $id = $_GET['companyID'];
    $sql = "delete from usercompany where c_id = '$id'";
    $query->delete_record($sql);
    redirect('listCompanies.php');
} elseif (@$_GET['UserID']) {
    $id = $_GET['UserID'];
    $sql = "SELECT usercompany.*,CONCAT(FirstName, ' ', LastName) as c_user, tblusers.* 
        FROM usercompany 
        INNER JOIN tblusers 
          ON  usercompany.UserID = tblusers.UserID where usercompany.UserID = $id";
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
        $title = "ListCompanies";
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
                            <h1 class="page-header">Companies</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List Companies
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>NTN</th>
                                                <th>Name</th>
                                                <th>Regno </th>
                                                <th>Email</th>
                                                <th>User</th>
                                                <th>Phone No </th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Verification</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['c_ntn']; ?></td>
                                                <td><a href="listProjects.php?c_id=<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></a></td>
                                                <td><?php echo $row['c_regno']; ?></td>
                                                <td><?php echo $row['c_email']; ?></td>
                                                <td><?php echo $row['c_user']; ?></td>
                                                <td><?php echo $row['c_phone']; ?></td>
                                                <td><?php echo $row['c_date']; ?></td>
                                                <td><?php echo ($row['c_status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Unactive</span>'; ?></td>
                                                <td><?php echo ($row['c_verification']==1)?'<span class="label label-success">Verified</span>': '<span class="label label-danger">Unverified</span>'; ?></td>
                                                <td> <span class="pointer">
                                                      <a  href="editCompany.php?companyID=<?php echo $row['c_id']; ?>">
                                                      <i class="fa fa-pencil-square"></i>
                                                      </a>
                                                      </span> |
                                                      <span class="pointer"">
                                                      <a class="deleteCompany" href="listCompanies.php?companyID=<?php echo $row['c_id']; ?>">
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
            if (confirm('Are you sure to delete this company?')) 
                return true;
            else
                return false;
        });
    });
</script>
</body>

</html>
