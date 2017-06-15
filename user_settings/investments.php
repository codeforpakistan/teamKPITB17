<?php 
$id = $_SESSION['userid'];
$sql = "SELECT *
FROM `tblinvestments`
INNER JOIN tblproject
WHERE tblinvestments.p_id = tblproject.p_id
AND tblinvestments.UserID = '".$id."' order by tblinvestments.invest_date desc";
$rows = @$query->select_record($sql);
?>
<div class="row">
                        <div class="col-lg-12">
                        <div class="col-lg-2"> </div>
								 <div class="col-lg-2"></div>
								 <div class="col-lg-6"><?php if(isset($_SESSION['warn']) && $_SESSION['warn'] != ''){
										echo '<span class="alert alert-danger">'.$_SESSION['warn'].' <a href="company.php"> Register new Company</a></span>'; 
										unset($_SESSION['warn']);
										} ?>
                                        </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                 
                                     Investment History
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>UserName</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Amount</th>
                                                <th>Project </th>
                                                <th>Date</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (count($rows) > 0) {

                                            foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $_SESSION['name']; ?></td>
                                                <td><?php echo $row['invest_fname'].' '.$row['invest_lname']; ?></td>
                                                <td><?php echo $row['invest_cell']; ?></td>
                                                <td><?php echo $row['invest_email']; ?></td>
                                                <td><?php echo $row['invest_amount']; 
												
												$totalamount +=$row['invest_amount'];
												?></td>
                                                <td><a href="project-single.php?project=<?php echo  $row['p_id']; ?>"><?php echo $row['p_title']; ?></a></td>
                                                 <td><?php echo $row['invest_date']; ?></td>
                                                

                                            </tr>
                                        <?php } 
                                        } ?>
                                        <tr>
                                        <th colspan="4">Total Investment</th>
                                        <th colspan="3"> Rs:<?php echo $totalamount; ?></th>
                                        
                                        </tr>
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