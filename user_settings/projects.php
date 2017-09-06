<?php 
$id = $_SESSION['userid'];
$sql = "SELECT tblproject.*, CONCAT(FirstName, ' ', LastName) as c_user, tblcategory.*, usercompany.*, tblusers.* 
        FROM tblproject 
        INNER JOIN tblcategory 
          ON  tblproject.cat_id = tblcategory.cat_id
        INNER JOIN usercompany
        ON tblproject.c_id = usercompany.c_id
        INNER JOIN tblusers
        ON tblproject.UserID = tblusers.UserID where tblproject.UserID = $id";
$rows = @$query->select_record($sql);
?>
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
                                        <?php if (count($rows) > 0) {

                                          foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><img src="control_panel/uploads/project/<?php echo $row['p_photo']; ?>"  width="50" /></td>
                                                <td><?php echo $row['p_title']; ?></td>
                                                <td><?php echo $row['p_amount']; ?></td>
                                                <td><?php echo $row['p_duration']; ?></td>
                                                <td><?php echo $row['cat_name']; ?></td>
                                                <td><?php echo $row['c_user']; ?></td>
                                                <td><?php echo $row['c_name']; ?></td>
                                                <td><?php echo ($row['p_status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Inactive</span>'; ?></td>
                                                <td><?php echo ($row['p_verification']==1)?'<span class="label label-success">Verified</span>': '<span class="label label-danger">Not Verified</span>'; ?></td>
                                                <td>
                                               <a href="layout.php?tabe=rasied&&idd=<?php echo $row['p_id']; ?>"> Investments</a>
                                                </td>
                                            </tr>
                                        <?php } 
                                            } 
                                        ?>
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
      <script type="text/javascript">
      $(document).ready(function() {

		      });
      </script>