<?php
if(!defined("allow")) {exit(include 'index.php');} 
class testimonial extends database
	{
		function select_testimonial()
			{
				$testimonial = $this->select_record("SELECT * FROM testimonials ORDER BY t_id DESC ");
				echo
				'
				<div class="row" style="margin-top:-30px;">
                    <div class="col-lg-12">
                        <h3 class="page-header">Testimonial</h3>
                    </div>
                </div>
				<div class="row">
					<div class="col-lg-12">
						<table class="table">
						<thead>
							<tr>
							  <th style="width:5%;">#</th>
							  <th style="width:15%;">Name</th>
							  <th style="width:20%;">Designation</th>
							  <th style="width:30%;">Description</th>
							  <th style="width:15%;">Image</th>
							  <th>
							  <a href="testimonial.php?action=insert">Add New</a>
							  </th>
							</tr>
						  </thead>
						  <tbody>
						  ';
						  if($testimonial > 0)
						  {
						  foreach($testimonial as $x=>$y)
						  	{
								if($y['t_image'])
									{
										$image = $y['t_image'];
									}
									else
										{
											$image ="no_img.png";
										}
								echo'
							<tr>
							  <td>'.$x.'</td>
							  <td>'.$y['t_name'].'</td>
							  <td>'.$y['t_designation'].'</td>
							  <td>'.$y['t_desc'].'</td>
							  <td><img src="img/testimonial/'.$image.'" width="80" height="80"></td>
							  <td>
							  	<a href="testimonial.php?update='.$y['t_id'].'">
							  		<button class="btn btn-primary"><i class="fa fa-edit"></i></button>
								</a>
								<a href="testimonial.php?delete='.$y['t_id'].'">
							  		<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								</a>
							  </td>
							</tr>
							';
							}
						  }
						  else
						  	{
								$msg =  "No Testimonials Found....";
							}
						echo'
						  </tbody>
						</table>
						'.$msg.'
					</div>
				</div>
				';
			}
		
		function new_testimonial()
			{
				if(isset($_POST['test']) && $_POST['test'] = 'add')
					{
						$data = array("t_name","t_designation","t_desc");
						if($_FILES['image']['name'])
						{
							
							$t_image = new t_image;
							$validation=$t_image->validation('image');
							if($validation)
								{
									$_POST['t_image']= $validation;
									$data[] = "t_image";
								}
						}
						$sql = $this->insert_record("testimonials",$data);
						$insert = mysqli_connect_error($sql);
						if($insert)
							{
								$_SESSION['success'] = "New Testimonial is added successfully :)";
								redirect("testimonial.php");
							}
						else
							{
								$_SESSION['error'] = "New Testimonial is added successfully :)";
								redirect("testimonial.php?action=insert");
							}
					}
			}
		
		function update_testimonial()
			{
				if(isset($_POST['update_test']) && $_POST['update_test'] !="")
					{
						$id = $_POST['update_test'];
						$data = array("t_name","t_designation","t_desc");
						if($_FILES['image']['name'])
						{
							
							$t_image = new t_image;
							$validation=$t_image->validation('image');
							if($validation)
								{
									$_POST['t_image']= $validation;
									$data[] = "t_image";
								}
						}
						$sql = $this->update_record("testimonials",$data, "t_id='".$id."'");
						$update = mysqli_query($connect, $sql);
						if($update)
							{
								$_SESSION['success'] = " Testimonial Update successfully :)";
								redirect("testimonial.php");
							}
							else
							{
								$_SESSION['error'] = "Oops Error....";
								redirect("testimonial.php?update=".$id);
							}
					}
			}
			
		function testimonial_form($update = false)
			{
				$show_form = true;
				if($update)
					{
						$testimonial = $this->select_one_record("select * from testimonials where t_id='".$update."'");
						if($testimonial)
							{
								$title = "Update";
								$t_name = $testimonial['t_name'];
								$t_designation = $testimonial['t_designation'];
								$t_desc = $testimonial['t_desc'];
								$hidden = '<input type="hidden" name="update_test" value="'.$testimonial['t_id'].'" >
											<input type="hidden" name="old_image" value="'.$testimonial['t_image'].'"
								';
							}
							else
								{
									$show_form = false;
									$this->select_testimonial();
								}
					}
				else
					{
								$title = "new";
								$t_name = $testimonial['t_name'];
								$t_designation = $testimonial['t_designation'];
								$t_desc = $testimonial['t_desc'];
								$hidden = '<input type="hidden" name="test" value="add">';	
					}
				if($show_form)
				{
				echo
				'
					<div class="row">
						<h3  class="page-header">New Testimonial</h3>
					</div>
					<div class="row">
						<div class="col-lg-2">
						</div>
					<form name="testimonial" method="post" enctype="multipart/form-data">
						<div class="col-lg-5">
							<div class="form-group">
								<label>Name</label>
								<input type="text" name="t_name" class="form-control" placeholder="Name" value="'.$t_name.'" required pattern="[a-z A-Z]+">
							</div>
							<div class="form-group">
								<label>Designation</label>
								<input type="text" name="t_designation" class="form-control" placeholder="Name" value="'.$t_designation.'" required >
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea name="t_desc" class="form-control" placeholder="Description">'.$t_desc.'</textarea>
							</div>
							<div>
								<input type="file" name="image">
							</div><br>
							<div>
								<input type="submit"  name="submit" class="btn btn-success" value="Add to List">
								'.$hidden.'
							</div>
						</div>
					</form>
					</div>
				';	
				}
			}
		
		function i_testimonial()
			{
				$test = $this->select_record("select * from testimonials");
				if($test > 0)
				{
				
						echo
						'
						  <div id="slider-testimonials" class="owl-carousel testimonials">
						  ';
						  foreach($test as $x=>$y)
							{
								if($y['t_image'])
									{
										$image = $y['t_image'];
									}
									else
										{
											$image  = "no_img.png";
										}
								echo'
                                <div class="testimonial clearfix">
                                    <div class="pull-left">
                                        <p>
										'.$y['t_desc'].'
										</p>
                                        <p class="testimonial-author special-font">'.$y['t_name'].' <a href="javascript:;">'.$y['t_designation'].'</a></p>
                                    </div>
                                    <div class="testimonial-thumb pull-right">
                                        <div class="shape diamond center"><img src="sb_admin/img/testimonial/'.$image.'"   /></div>
                                    </div>
                                </div>
								
                                ';
                                
                               }
							   echo' 
                            </div>
						';
					
				}
				else
					{
						echo "";
					}
			}
		
		function delete_testimonial()
			{
				if(isset($_GET['delete']) && $_GET['delete'] !="" && is_numeric($_GET['delete']))
					{
						$query = $this->delete_record("delete from testimonials where t_id='".$_GET['delete']."'");
						redirect("testimonial.php");
					} 
			}
	}
	class t_image
		{
			#define directory
			var $directory = 'img/testimonial/';
			#size
			var $max_size = 6540000;
			#error
			var $error = false;
			
			function validation($file)
			{
					$name = $_FILES[$file]['name'];
					$size = $_FILES[$file]['size'];
					$type = $_FILES[$file]['type'];
					$error = $_FILES[$file]['error'];
					$tmp_name = $_FILES[$file]['tmp_name'];
					
					if($error > 0)
						{
							$this->error = "Sorry Internal Error....";
						}
					if($size > $this->max_size)
						{
							$this->error = "Sorry Max Size";
						}
					if(($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg") && ($type != "image/gif"))
						{
							$this->error = $type."Are not allowed";
						}
					/*if(file_exists($this->dir.$name))
						{
							$this->error = "Sorry the file you uploading is already exists in directory";
						}*/
					if($this->error)
						{
							$_SESSION['error'] = "File Error". $this->error;
						}
					else
						{
							$move = move_uploaded_file($tmp_name, $this->directory.$name);
								if($move)
								{
									return $name;	
								}
								else
									{
										return false;
									}
						}
				}
		}
?>