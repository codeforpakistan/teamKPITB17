<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';
//$sql = "select * from usercompany";
$sql = "SELECT tblinvestments.*, tblusers.* 
        FROM tblinvestments 
        INNER JOIN tblusers 
          ON  tblinvestments.UserID = tblusers.UserID order by tblinvestments.invest_date desc ";
$query = new database();
$rows = $query->select_record($sql);
if (@$_GET['investmentID']) {
    $id = $_GET['investmentID'];
    $sql = "delete from tblinvestments where invest_id = '$id'";
    $query->delete_record($sql);
    redirect('listInvestments.php');
} /*elseif (@$_GET['c_id']) {
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
}*/ 

$numRows = count($rows);
if ($numRows <= 0) {
    $rows = array();
}
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
        $title = "List Investments";
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
                            <h1 class="page-header">Investments</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    List Investments
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Name </th>
                                                <th>Country </th>
                                                <th>Phone</th>
                                                <th>Email </th>
                                                <th>Address</th>
                                                <th>Amount</th>
                                                <th>User</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['invest_fname'].' '.$row['invest_lname']; ?></td>
                                                <td><?php echo $row['invest_city']; ?></td>
                                                <td><?php echo $row['invest_cell']; ?></td>
                                                <td><?php echo $row['invest_email']; ?></td>
                                                <td><?php echo $row['invest_address']; ?></td>
                                                 <td><?php echo $row['invest_amount']; ?></td>
                                                <td><?php echo $row['FirstName'].' '.$row['LastName']; ?></td>
                                                <td><?php echo ($row['invest_status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Inactive</span>'; ?></td>
                                                <td> <span class="pointer">
                                                      <a  href="editInvestment.php?investmentID=<?php echo $row['invest_id']; ?>">
                                                      <i class="fa fa-pencil-square"></i>
                                                      </a>
                                                      </span> |
                                                      <span class="pointer"">
                                                      <a class="deleteInvestment" href="listInvestments.php?investmentID=<?php echo $row['invest_id']; ?>">
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
        $('.deleteInvestment').on('click', function() {
            if (confirm('Are you sure to delete this record?')) 
                return true;
            else
                return false;
        });
    });
</script>
</body>

</html>
