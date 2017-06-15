<?php
if(!defined("allow")) {exit(include 'index.php');}
class newsletter extends database
	{
		function select_newsletter()
			{
				$newsletter = $this->select_record("SELECT * FROM  newsletter ");
				echo
				'
					<div class="row" style="margin-top:-30px;">
						<div class="col-lg-12">
							<h3 class="page-header">Newsletter</h3>
						</div>
                	</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="table-responsive">
							<table width="100" class="table">
							  <thead>
								<tr>
								  <th style="width:2%;">#</th>
								  <th style="width:10%;">Name</th>
								  <th style="width:10%;">Contact</th>
								  <th style="width:10%;">Email</th>
								 
								  <th style="width:5%;">-</th>
								</tr>
							  </thead>
							  <tbody>
							  ';
							  if($newsletter > 0)
							  {
								  foreach($newsletter as $x=>$y)
								  {
									  echo'
										<tr>
											<td>'.escape($x).'</td>
											<td>'.escape($y['nl_name']).'</td>
											<td>'.escape($y['nl_contact']).'</td>
											<td>'.escape($y['nl_email']).'</td>
											
											<td>
											<button class="btn btn-default btn-small" title="View"><i class="glyphicon glyphicon-eye-open"></i></button>
											<a href="newsletter.php?delete='.$y['nl_id'].'">
												<button class="btn btn-danger btn-small" title="Delet/Remove"><i class="fa fa-trash-o"></i></button>
											</a>
											</td>
										</tr>
										';
								  }
							  }
							  else
							  	{
									echo "No Newsletter Yet";
								}
							  echo'
							  </tbody>
							</table>

						</div>
						</div>
					</div>
				';
			}
			
			function delete_newsletter()
				{
					if(isset($_GET['delete']) && $_GET['delete'] !="" && is_numeric($_GET['delete']))
					{
						$query = $this->delete_record("delete from newsletter where nl_id='".$_GET['delete']."'");
						redirect("newsletter.php");
					}
					
				}
	}
?>