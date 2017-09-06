<?php 
if(isset($_POST['app'])){
$projectid=$_POST['projectid'];
$ivestid=$_POST['investid']; 

$sql = "select usercompany.c_name, tblusers.*, tblproject.p_title from tblproject inner join tblusers on tblusers.UserID = tblproject.UserID inner join usercompany on usercompany.UserID = tblproject.UserID  where tblproject.p_id = '$projectid' limit 1";
$result = mysqli_query($connect, $sql); 
$row = mysqli_fetch_array($result);
if (count($row) > 0) {
    require_once('approved_fund_mail.php');
}
$update=mysqli_query($connect ,"update tblinvestments set invest_status= '1' where p_id='$projectid' and invest_id ='$ivestid'");
	
    }
$id = $_SESSION['userid'];
if(isset($_GET['idd']) && $_GET['idd'] != ''){
	 $idd=$_GET['idd'];
	 $sql="Select * From tblinvestments where p_id ='".$idd."' order by invest_date desc";
	
	}
	else{
$sql = "SELECT * 
FROM  `tblproject` 
INNER JOIN(tblusers,tblinvestments)ON (tblproject.`UserID` = tblusers.`UserID` AND tblproject.p_id =tblinvestments.p_id) where tblproject.UserID='$id' order by tblinvestments.invest_date desc";
	}
$rows = @$query->select_record($sql);
?>
<div class="row">
                        <div class="col-lg-12">
                        <div class="col-lg-2"> </div>
								 <div class="col-lg-2"></div>
								 <div class="col-lg-6"><?php if(isset($_SESSION['warn']) && $_SESSION['warn'] != ''){
										echo '<span class="alert alert-danger">'.$_SESSION['warn'].'</a></span>'; 
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
                                              <?php if(!isset($_GET['idd'])){
													echo '<th>Project</th>';
												}
													 ?>
                                                <th>Date</th>
                                                <th>Action </th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (count($rows) > 0) {
                                            $totalamount = 0;

                                            foreach($rows as $row) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $_SESSION['name']; ?></td>
                                                <td><?php echo $row['invest_fname'].' '.$row['invest_lname']; ?></td>
                                                <td><?php echo $row['invest_cell']; ?></td>
                                                <td><?php echo $row['invest_email']; ?></td>
                                                <td><?php echo $row['invest_amount']; 
												
												$totalamount +=$row['invest_amount'];
												?></td>
                                                <?php if(!isset($_GET['idd'])){
													echo '<td><a href="layout.php?tabe=rasied&&idd='.$row['p_id'].'">'.$row['p_title'].'</a></td>';
												}
													 ?>
                                               
                                                  <td><?php echo $row['invest_date']; ?></td>
                                                <td>
                                                <?php if($row['invest_status'] == 0){
													 $iddd=$row['invest_id'];
													 echo '<form action="" method="post" >
													 <input type="hidden" name="projectid" value="'.$row['p_id'].'" />
													 <input type="hidden" name="investid" value="'.$row['invest_id'].'" />
                                                      <input type="hidden" name="investerName" value="'.$row['invest_fname'].' '.$row['invest_lname'] . '" />
                                                       <input type="hidden" name="amount" value="'.$row['invest_amount'].'" />
                                                       <input type="hidden" name="email" value="'.$row['invest_email'].'" />
													  <input type="hidden" name="app" value="invest" />
													 <input type="submit" name="approve" value="Approve" class="btn btn-danger" Onclick="return ConfirmDelete();" />
													 
													 </form>';
													
													}
													elseif($row['invest_status'] == 1){
														echo '<label class="btn btn-success">Verified</label>';
														
														} ?>
                                                </td>
                                               
                                                

                                            </tr>
                                        <?php } 
                                        } ?>
                                        <tr>
                                        <th colspan="4">Total Investment</th>
                                        <th colspan="4"> Rs:<?php echo $totalamount; ?></th>
                                        
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
      
      <script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to  Verify This Payment?");
      if (x)
          return true;
      else
        return false;
    }
</script>   