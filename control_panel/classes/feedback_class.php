<?php
if(!defined("allow")) {exit(include 'index.php');}
class feedback extends database
	{
		function select_feed()
			{
				$feed = $this->select_record("select * from feedback");
				echo
				'
					<table width="200" class="table">
                      <thead>
                        <tr>
                          <th style="width:2%;">#</th>
                          <th style="width:13%;">Name</th>
                          <th style="width:13%;">Contact</th>
                          <th style="width:15%;">eMail</th>
                          <th style="width:20%;">Subject</th>
                          <th style="width:25%;">Message</th>
                          <th>-</th>
                        </tr>
                       </thead>
					    <tbody>
					   ';
					   if($feed > 0)
					   {
						   foreach($feed as $x => $y)
						   {
							   echo
							   '
								<tr>
								  <td>'.escape($x).'</td>
								  <td>'.escape($y['fb_name']).'</td>
								  <td>'.escape($y['fb_contact']).'</td>
								  <td>'.escape($y['fb_email']).'</td>
								  <td>'.escape($y['fb_subject']).'</td>
								  <td>'.escape($y['fb_message']).'</td>
								  <td>
								  <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								  </td>
								</tr>
								';
						   }
					   }
					   else
					   	{
							$msg = "NO FEEDBACK RECIVED";
						}
					   echo'
                          </tbody>
                    </table>
					'.$msg.'
				';
			}
		function add_feed()
			{
				if(isset($_POST['sent']) && $_POST['sent'] = 'message')
					{
						$data = array("fb_name", "fb_contact","fb_email","fb_subject","fb_message","sub_");
						
						$query = $this->insert_record("feedback", $data);
						//print_r($query); exit;
						$insert = mysqli_query($connect, $query);
						if($insert)
							{
								$_SESSION['success'] = "Your Messge is been sent. Thank You :)";
							}	
					} 
			}
		function feed_form()
			{
				echo 
				'
				<form method="post" autocomplete="off">
					 <input type="text" name="sub_"  placeholder="NAME" class="name form-control" value="'.$GLOBALS['sub_number'].'" style="display:none;">
                    <input type="text" name="fb_name"  placeholder="NAME" class="name form-control" required>
                    <input type="text" name="fb_contact" placeholder="PHONE" class="phone form-control" required>
                    <input type="email" name="fb_email"  placeholder="E-MAIL" class="email form-control" required>
                    <input type="text" name="fb_subject" aria-required="true" aria-invalid="false" placeholder="SUBJECT" class="subject form-control">
                    <textarea name="fb_message" cols="40" rows="4" aria-invalid="false" placeholder="MESSAGE" class="message form-control"></textarea></span>
                  <input type="submit" name="submit" value="SENT">
                  <input type="hidden" name="sent" value="message">
                </form>
				
				';
			}
			
		function delete_feed()
			{
				if(isset($_GET['delete']) && $_GET['delete'] !="" && is_numeric($_GET['delete']))
					{
						//$wury
					}
			}
	}
?>