<?php
require_once '../config/config.php';
	require_once '../config/connection.php';
if(isset($_POST['add']) && $_POST['add'] == "user")
{
	foreach ($_POST as $key => $value) {
		$$key=$value;
	//	echo $$key;
	//	echo $_POST['password'];
	}
	//$password=md5($password);

$register=mysqli_query($connect, "insert into tblusers set FirstName='$firstname',LastName='$lastname',Email='$email',NickName='$nickname',Password='$password',Role_ID='1'")or die(mysqli_connect_error());

if($register)
{
  $_SESSION['name']=$_POST['firstname'].' '.$_POST['lastname'];
$_SESSION['firsname']=$_POST['firstName'];
$_SESSION['lastname']=$POST_['lastName'];
$_SESSION['email']=$_POST['email'];
$_SESSION['img'] ='assets/images/defaultUser.png';
$_SESSION['mobile']=$_POST['mobile']; 
$_SESSION['userid']=mysqli_insert_id($connect);

	header('location:../../choice.php');
	exit();
}
elseif(mysqli_errno() == 1062){

	$_SESSION['msg']='<span class="alert alert-warning"><strong>Sorry This Email Is Aleary Registered</strong> </span>';
	header('location:../../register.php') ;
exit();
	}
else
{
	 $_SESSION['msg']='<span class="alert alert-warning"><strong>Sorry Error Occurr in Signup Process..</strong> </span>';
header('location:../../index.php') ;
exit();
}

}

///////////////////////////////// Log in ////////////////////////////////////////////////
if(isset($_POST['log']) && $_POST['log'] == 'in')
{
$email=mysqli_real_escape_string($connect, $_POST['email']);
$password=mysqli_real_escape_string($connect, $_POST['password']);

//$password=md5($password);
$query_login=mysqli_query($connect, "select * from tblusers where Email='$email' and Password='$password'")  or die(mysqli_connect_error());

$num=mysqli_num_rows($query_login);
if($num > 0)
{
$rec=mysqli_fetch_assoc($query_login);
$_SESSION['name']=$rec['FirstName'].' '.$rec['LastName'];
$_SESSION['firstname']=$rec['FirstName'];
$_SESSION['lastname']=$rec['LastName'];
$_SESSION['email']=$rec['Email'];
$_SESSION['img'] = $rec['img'];
$_SESSION['userid']=$rec['UserID'];
if(isset($_SESSION['project'])){
	header('location:../../project-single.php?project='.$_SESSION['project'].'') ;
	unset($_SESSION['project']);
exit();
	}
header('location:../../index.php') ;
exit();
}
else
{
	
	 $_SESSION['msg']='<span class="alert alert-warning"><strong>Sorry Error Occurr in Login Process..</strong> </span>';
header('location:../../register.php?login') ;
exit();

}

}



////////////////////////// Company Registation //////////////////////////////

if(isset($_POST['add']) && $_POST['add'] == 'company')

{

foreach($_POST as $name => $value)
{

$$name=$value;

}
$hash=$hash = md5( rand(0,1000) );
//print_r($_POST);
$photo =$_FILES['teamphoto']['name'];
 
  $type=$_FILES['teamphoto']['type']; 
 $temp=$_FILES['teamphoto']['tmp_name'];
 $size=$_FILES['teamphoto']['size'];
 $error=$_FILES['teamphoto']['error'];
if($photo == "")
    {
	  $type='pass';
	}
if($type=="image/jpg" || $type=="image/jpeg" || $type=="image/png" || $type=="image/gif" || $type== 'pass')
 {
 //$daud="insert into usercompany set c_ntn='$cntn',c_name='$cname',c_regno='$cregno',c_email='$cemail',
	//c_website='$cwebsite',c_phone='$cphone',c_detail='$cdetail',UserID='$userid',hash='$hash',c_teamphoto='$teamphoto', c_teamdesc = '$teamdesc'";
   $company_query=mysqli_query($connect, "insert into usercompany set c_ntn='$cntn',c_name='$cname',c_regno='$cregno',c_email='$cemail',
	c_website='$cwebsite',c_phone='$cphone',c_detail='$cdetail',UserID='$userid',hash='$hash',c_teamphoto='$teamphoto', c_teamdesc = '$teamdesc'");
	 move_uploaded_file($temp,"../uploads/team/".$photo);
  }
else
   {
	 $_SESSION['msg']='<span class="alert alert-warning"><strong>This is Not Image You Trying to Uplaod</strong> </span>';
      header('location:../../company.php?error');
       exit();
	}
if($company_query)
{
 $to     = $cemail;
$subject = 'Company Email Verification';
$company=mysqli_insert_id($connect);
$user=$_SESSION['userid'];
$name=$_SESSION['name'];
$name = str_replace(' ', '', $name);
$message = 'Please click this link to activate your account:
http://daud.pakec.com/verify.php?email='.$cemail.'&&hash='.$hash.'
 
'; // Our message above including the link';
$headers = 'From: md_dcservices.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
if(mail)
{
 $_SESSION['msg']='<span class="alert alert-info"><strong>Please Check Your Email For  For Verification</strong> </span>';	
header('location:../../company.php?done');
exit();
}
else{
	  $_SESSION['msg']='<span class="alert alert-warning"><strong>Error occur in Registration</strong> </span>';
header('location:../../company.php?error');
exit();

}

}
}

////////////////////////// Company Registation //////////////////////////////



////////////////////////// project pitching//////////////////////////////
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
	  	if ($_POST['prek_name'][$i] != '') {
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
	  	}
	  	
	  	$i++;
	  }
	}
	  
 if($result){
	 unset($_SESSION['comp_id']);
	 move_uploaded_file($temp,"../uploads/project/".$photo);
	  move_uploaded_file($profile_temp,"../uploads/profile/".$profile);
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





////////////////////////// project pitching//////////////////////////////


if(isset($_POST['invest']) && $_POST['invest'] == 'money')
{
//print_r($_POST);
	foreach($_POST as $key => $y)
	{
		$$key = mysqli_real_escape_string($connect,$y);
	}
	
	$invest=mysqli_query($connect,
	 "insert into tblinvestments set 
	 invest_amount='$amount',
	 invest_fname='$fname',
	 invest_lname='$lname',
	 invest_email='$email',
	 invest_address='$address',
	 invest_country='country',
	 invest_city='$city',
	 invest_cell='$cellno',
	 invest_phone='$phoneno',
	 invest_comment='$comments',
	 UserID='$userid',
	 p_id='$project'
	 " );
	 
	 if($invest)
	    {
		 $_SESSION['msg']='<span class="alert alert-success"><strong>Thanks for your Investment....</strong></span>';
		header('location:../../projects.php');
		 exit();
		 }
		 
		 else
		 {
	     $_SESSION['msg']='<span class="alert alert-warning"><strong>Sorry Some Error ouccur ...</strong></span>';
		 header('location:../../projects.php');
		 exit();
		 } 
			 
			
	}




  ////////////////////////// Project Pitching//////////////////////////////
 ?>