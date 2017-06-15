<?php 
$id = $_SESSION['userid'];
$sql = "SELECT usercompany.*,CONCAT(FirstName, ' ', LastName) as c_user, tblusers.* 
        FROM usercompany 
        INNER JOIN tblusers 
          ON  usercompany.UserID = tblusers.UserID where usercompany.UserID = $id";
$rows = @$query->select_record($sql);
?>
<div class="row">
                        <div class="col-lg-12">
                        <div class="col-lg-2"> </div>
								 <div class="col-lg-2"></div>
								 <div class="col-lg-6"><?php if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
										echo '<span class="alert alert-danger">'.$_SESSION['msg'].' <a href="company.php"> Register new Company</a></span>'; 
										unset($_SESSION['msg']);
										} ?>
                                        </div>
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
                                        <?php if (count($rows) > 0) {

                                            foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['c_ntn']; ?></td>
                                                <td><?php echo $row['c_name']; ?></td>
                                                <td><?php echo $row['c_regno']; ?></td>
                                                <td><?php echo $row['c_email']; ?></td>
                                                <td><?php echo $row['c_user']; ?></td>
                                                <td><?php echo $row['c_phone']; ?></td>
                                                <td><?php echo $row['c_date']; ?></td>
                                                <td><?php echo ($row['c_status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Unactive</span>'; ?></td>
                                                <td><?php echo ($row['c_verification']==1)?'<span class="label label-success">Verified</span>': '<span class="label label-danger">Unverified</span>'; ?></td>
                                                <td>
                                                <?php echo ($row['c_status']==1)?'<a href="verify.php?cid='.$row['c_id'].'&&name='.$row['c_name'].'"><strong>Add New Project</strong></a>':
												 '<a href="verify.php?cid='.$row['c_id'].'&&name='.$row['c_name'].'"><strong>Resend Email</strong></a>'; ?>
                                                
                                                </td>

                                            </tr>
                                        <?php } 
                                        } ?>
                                        </tbody>
                                    </table>
                              
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
      <script type="text/javascript">
      $(document).ready(function() {

		      });
      </script>