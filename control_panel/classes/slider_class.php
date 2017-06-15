<?php
if(!defined("allow")) {exit(include 'index.php');}
class slider extends database
	{
		function select_slider()
			{
				$slider = $this->select_record("SELECT * FROM slider ORDER BY s_id desc")or die(mysqli_connect_errno());
				echo
				'
					<div class="row" style="margin-top:-30px;">
						<div class="col-lg-12">
							<h3 class="page-header">Sliders</h3>
					</div>  
						<div class="row">
							<div class="col-lg-12">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Slider Image</th>
											<th>Slider Title</th>
											<th>Slider Desc</th>
											<th>
												<a href="slider.php?action=insert">New Slider</a>
											</th>
										</tr>
									</thead>
									<tbody>
								';
								if($slider > 0 )
									{
										foreach ($slider as $x => $y)
											{
												if($y['s_image'])
													{
														$image = $y['s_image'];
													}
													else
														{
															$image = "no_img.png";
														}
											echo'
											<tr>
												<td>'.$x.'</td>
												
												<td><img src="img/slider/'.$image.'" width="100" hieght="100"></td>
												<td>'.$y['s_name'].'</td>
												<td>'.$y['s_desc'].'</td>
												<td>
												<a href="slider.php?update='.$y['s_id'].'">
													<button class="btn btn-primary btn-sm"><i class="fa fa-edit" style="font-size:14px;"></i></button>
												</a>
												<a href="slider.php?delete='.$y['s_id'].'">
													<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" style="font-size:14px;"></i></button>
												</a>
												</td>
											</tr>
										
											';
											}
									}
									else
										{
											$msg = "No Slider Found";
										}
										echo '
									<tbody>
								</table>
								'.$msg.'
							<div>
						</div>
               	    </div>
				';
			}
		
		function new_slider()
			{
				if(isset($_POST['add']) && $_POST['add'] = 'slider')
					{
						$data = array("s_name","s_desc");
						if($_FILES['image']['name'])
							{
								$s_image = new s_image;
								$vaidation = $s_image->validate('image');
								if($vaidation)
									{
										$_POST['s_image'] = $vaidation;
										$data[] = "s_image";
									}
							}
						$query = $this->insert_record("slider",$data);
						$insert = mysqli_query($connect, $query)or die(mysqli_connect_errno());
						//print_r($insert); exit;
						if($insert)
							{
								$_SESSION['success'] = "New slider Added Successfully :)";
								redirect("slider.php");
							}
						else
							{
								$_SESSION['error'] = "Error Occure";
								redirect("slider.php?action=insert");
							}
					}	
			}
		
		function update_slider()
			{
				if(isset($_POST['update_slider']) && $_POST['update_slider']  != "")
					{
						$id = $_POST['update_slider'];
						$data = array("s_name","s_desc");
						if($_FILES['image']['name'])
							{
								$s_image = new s_image;
								$vaidation = $s_image->validate('image');
								if($vaidation)
									{
										$_POST['s_image'] = $vaidation;
										$data[] = "s_image";
									}
							}
						$query = $this->update_record("slider", $data, "s_id='".$id."' ");
						$update = mysqli_query($connect, $query);
						if($update)
							{
								$_SESSION['success'] = " slider Updated Successfully :)";
								redirect("slider.php");
							}
						else
							{
								$_SESSION['error'] = "Error Occure";
								redirect("slider.php?update=".$id);
							}
					
					}
			}
		
		function slider_form($update = false)
			{
				$show_form = true;
				if($update)
					{
						$slider = $this->select_one_record("SELECT * FROM slider where s_id='".$update."'")or die(mysqli_connect_errno());
						if($slider)
							{
								$title = "Update";
								$s_name = $slider['s_name'];
								$s_desc = $slider['s_desc'];
								$hidden = '<input type="hidden" name="update_slider" value="'.$slider['s_id'].'" >
											<input type="hidden" name="old_image" value="'.$slider['s_image'].'">
								';
							}
							else
								{
									$show_form = false;
									$this->select_slider();
								}
					}
					else
						{
							$title = "New";
							$s_name = $slider['s_name'];
							$s_desc = $slider['s_desc'];
							$hidden = '<input type="hidden" name="add" value="slider" >';
						}
					if($show_form)
						{
							echo
							'
							<div class="row">
								<div class="col-lg-12">
									<h3 class="page-header">'.$title.' Slider</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3">
								</div>
								<div class="col-lg-4">
									<form method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label>Title</label>
											<textarea name="s_name" class="form-control" placeholder="Slider Title">'.$s_name.'</textarea>
										</div>
										<div class="form-group">
											<label>Descrption</label>
											<textarea name="s_desc" class="form-control" placeholder="Slider Description">'.$s_desc.'</textarea>
										</div>
										<div class="form-group">
											<label>Slider Image</label>
											<input type="file" name="image">
										</div>
										
										<label>&nbsp;</label>
										<input type="submit" name="submit" class="btn btn-success" value="Save">
										'.$hidden.'
									</form>
								</div>
							</div>  	
							';
						}
			}
			
			function delete_slider()
				{
					if(isset($_GET['delete']) && $_GET['delete'] !="" && is_numeric($_GET['delete']))
						{
							$sql = $this->delete_record("delete from slider where s_id='".$_GET['delete']."'");
							//print_r($sql); exit;
							redirect("slider.php");
						} 
				}
			
			function i_slider()
				{
					$i_slider = $this->select_record("select * from slider ORDER BY s_id DESC");
					if($i_slider > 0 )
						{
							foreach($i_slider as $x=>$y)
								{
									if($y['s_image'])
										{
											$image = $y['s_image'];
										}
									else
										{
											$image = "no_img.png";
										}
									echo
									 '
									  
										<div style="height:300px;"><img src="sb_admin/img/slider/'.$image.'"  /></div>
										
									 
									 ';
								}
						}
						else
							{
								echo "No Slider";
							}
				}
			
			
			
	#		
	}
	class s_image
		{
			#define directory
			var $dir='img/slider/';
			#define max size
			var $max_size = 6540000;
			#define error
			var $error = false;
			
			function validate($file)
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
							$move = move_uploaded_file($tmp_name, $this->dir.$name);
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