<?php 
require_once '../config/config.php';
	require_once '../config/connection.php';
if(isset($_POST['add']) && $_POST['add'] == 'project')
{
//echo 'm here';

foreach ($_POST as $name => $value) {

	//$$name= mysqli_real_escape_string($connect,$value);
	# code...
}
//////////////// IMAGE code /////////////////////
 $photo =$_FILES['pphoto']['name'];
 
  $type=$_FILES['pphoto']['type']; 
 $temp=$_FILES['pphoto']['tmp_name'];
 $size=$_FILES['pphoto']['size'];
 $error=$_FILES['pphoto']['error'];
 //////////////////// profile image////////////
  $profile =$_FILES['userphoto']['name'];
 
  $profile_type=$_FILES['userphoto']['type']; 
 $profile_temp=$_FILES['userphoto']['tmp_name'];
 $profile_size=$_FILES['userphoto']['size'];
 $profile_error=$_FILES['userphoto']['error'];
 //////////////////// profile image////////////
 if($photo == '' || $profile == ''){
	 $type='pass';
	 
	 }
//echo 'i m here';
//".$_SESSION['comp_id']."
	 if($type=="image/jpg" || $type=="image/jpeg" || $type=="image/png" || $type=="image/gif" || $type== 'pass' ||
	 $profile_type=="image/jpg" || $profile_type=="image/jpeg" || $profile_type=="image/png" || $profile_type=="image/gif"
	  ){
	  	extract($_POST);
	  if ($photo == '') {
	  	$photo = 'assets/images/project.jpg';
	  } else {
	  	$photo = $photo;
	  } 
	  if ($profile == '') {
	  	$profile = 'assets/images/defaultUser.png';
	  } else {
	  	$profile = $profile;
	  }
  $result=mysqli_query($connect, "insert into tblproject set
     p_title= '$ptitle',
 	p_amount='$pamount',
 	p_duration='$pduration' ,
 	p_link='$plink',
 	p_location='$pcity',
 	p_desc='$pdesc',
 	p_story='$pstory',
 	p_photo='$photo',
 	cat_id='$pcategory',
 	c_id='2',
	p_fname='$fname',
	p_lastname='$lname',
	p_dob='$dob',
	p_phone='$phone',
	p_fb='$fb',
	p_lnkdin='$lnkdin',
	p_profile='$profile',
 	UserID='$userid'")or die(mysqli_error($connect));
	$id = mysqli_insert_id($connect);
	if ($id) {
		$i = 0;
	  while($i < count($_POST['prek_name'])) {
	  	$prek_name = $_POST['prek_name'][$i];
	  	$contribute_amount = $_POST['contribute_amount'][$i];
	  	$number_available = $_POST['number_available'][$i];
	  	$estimate_delivery_date = $_POST['estimate_delivery_date'][$i];
	  	$description = $_POST['description'][$i];
	  	
	  	 mysqli_query($connect, "insert into tblpreks set
	  	 	perk_name = '$prek_name',
	  	 	contribute_amount = '$contribute_amount',
	  	 	number_available = '$number_available',
	  	 	estimate_delivery_date = '$estimate_delivery_date',
	  	 	description = '$description',
	  	 	project_id = '$id',
	  	 	status = '1'
	  	 	") or die(mysqli_error($connect));
	  	$i++;
	  }
	}
	  
 if($result){

	 unset($_SESSION['comp_id']);
	 move_uploaded_file($temp,"../uploads/project/".$photo) or die ("Failure to upload content");
	  move_uploaded_file($profile_temp,"../uploads/profile/".$profile) or die ("Failure to upload content");
	   $_SESSION['msg']='<span class="alert alert-info"><strong>Project Submitted Successfully, Please Wait For Confrimation..</strong> </span>';
	 	header('location:../../projects.php');
      exit();
	 }
  
	 else{
	 	 $_SESSION['msg']='<span class="alert alert-warning"><strong>Error Occur in Submission</strong></span>';
		 header('location:../../pitch.php');
exit();
		 }
	 }	
	 ////////////////////////////// massage if there were other file than image ////////////////////////
	else {
			 	 $_SESSION['msg']='<span class="alert alert-warning"><strong>Sorry This is Not IMAGE you trying To upload...</strong></span>';
	 header('location:../../pitch.php');
exit();
		
		}	
		}	



?>