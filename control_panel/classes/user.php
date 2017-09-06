<?php
require_once '../config/config.php';
require_once '../config/connection.php';
if(isset($_POST['add']) && $_POST['add'] == "user")
{
$your_secret = "6LchYSwUAAAAAOpBwhHKvPlRAi4XFz9g947PLohc";
    $client_captcha_response = $_POST['g-recaptcha-response'];
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $captcha_verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$your_secret&response=$client_captcha_response&remoteip=$user_ip");
    $captcha_verify_decoded = json_decode($captcha_verify);
    if(!$captcha_verify_decoded->success) {
      $_SESSION['msg']='<div class="alert alert-danger alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Dirty rebot.
</div>';
	header('location:../../register.php?signup');
	exit;
    } else {
    	$email = $_POST['email'];
    	$sql = "select * from tblusers where Email = '$email'";
    	$result = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    	$rows = mysqli_num_rows($result);
    	if ($rows > 0) {
    		$_SESSION['msg']='<div class="alert alert-warning alert-dismissable">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Success!</strong> This Email Is Aleary Registered.
		</div>';
			
		header('location:../../register.php?signup');
		exit();
    	}
    }

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
$_SESSION['img'] ='defaultUser.png';
$_SESSION['mobile']=$_POST['mobile']; 
$_SESSION['userid']=mysqli_insert_id($connect);

	header('location:../../choice.php');
	exit();
}
elseif(mysqli_errno() == 1062){
	 $_SESSION['msg']='<div class="alert alert-warning alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Sorry Error Occurr in Signup Process.
</div>';
	header('location:../../register.php') ;
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
	
	 $_SESSION['msg']='<span class="alert alert-warning"><strong>Invalid user name or password, please try again</strong> </span>';
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
$message="<table bgcolor='#ffffff' width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent' align='center'  style='font-family:Helvetica, Arial,serif;'>
  <tbody>
    <tr>
      <td><table width='600' border='0' cellspacing='0' cellpadding='0' align='center' bgcolor='#ffffff' class='MainContainer'>
  <tbody>
    <tr>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' width='40'>&nbsp;</td>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
  <!-- =============================== Header ====================================== -->   
    <tr>
    	<td height='75' class='spechide'></td>
        
        <!-- =============================== Body ====================================== -->
    </tr>
    <tr>
      <td class='movableContentContainer ' valign='top'>
      	<div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td height='35'></td>
    </tr>
    <tr>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' align='center' class='specbundle'><div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable'>
                                  <p style='text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;'><span class='specbundle2'><span class='font1'>Welcome to Crowd Durshal</span></span></p>
                                </div>
                              </div></td>
     
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
 <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr>
                            <td valign='top' align='center'>
                              <div class='contentEditableContainer contentImageEditable'>
                                <div class='contentEditable'>
                                  <img src='images/line.png' width='251' height='43' alt='' data-default='placeholder' data-max-width='560'>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
        </div>
		
		<div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr><td height='55'></td></tr>
                          <tr>
                            <td align='left'>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable' align='center'>
                                  <h2 >A place designed to give your startup a new life.</h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td align='center'>
                              <table>
                                <tr>
                                  <td align='center' bgcolor='#1A54BA' style='background:#1A54BA; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='center'>
                                        <a target='_blank' href='http://kpgoestech.com/crowddurshal/verify.php?email=".$cemail."&&hash=".$hash."' class='link2' style='color:#ffffff;'>Activate your Company</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height='20'><h3>Sent by Crowd Durshal: 134, Industrial Estate, Hayatabad، Peshawar 25000</h3></td></tr>
                        </table>
        </div>


";
/*$message = '
Welcome to Crowd Durshal - A place designed to give your startup a new life.</br>
<span style="color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;"><a href="http://kpgoestech.com/crowddurshal/verify.php?email='.$cemail.'&&hash='.$hash.'">Confirm Your Email</a></span>
  </br>
  In case button is not working, please click on the link below:</br>
http://kpgoestech.com/crowddurshal/verify.php?email='.$cemail.'&&hash='.$hash.'
</br>
<h3>Sent by Crowd Durshal: 134, Industrial Estate, Hayatabad، Peshawar 25000</h3>

'; */// Our message above including the link';
$headers = 'From: info@kpgoestech.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" ."MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n".
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
if(mail)
{
 $_SESSION['msg']='<span class="alert alert-info"><strong>Please Check Your Email For Verification</strong> </span>';	
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
 $p_amount=mysqli_real_escape_string($connect, $_POST['pamount']);
 $pamountt=$b = str_replace( ',', '', $p_amount );

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
	  	$profile = 'defaultUser.png';
	  } else {
	  	$profile = $profile;
	  }
	 
  $result=mysqli_query($connect, "insert into tblproject set
     p_title= '$ptitle',
 	p_amount='$pamountt',
 	p_duration='$pduration' ,
 	p_link='$plink',
 	p_location='$pcity',
 	p_desc='$pdesc',
 	p_story='$pstory',
 	p_photo='$photo',
 	cat_id='$pcategory',
 	c_id='".$_SESSION['comp_id']."',
	p_fname='$fname',
	p_lastname='$lname',
	p_dob='$dob',
	p_phone='$phone',
	p_fb='$fb',
	p_lnkdin='$lnkdin',
	p_profile='$profile',
	p_facebook='$pfb',
	p_twitter='$ptwitter',
	p_youtube='$pyoutube',
	p_website='$pwebsite',
 	UserID='$userid'")or die(mysqli_error($connect));
	;
	/*
	$id = mysqli_insert_id($connect)
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
	}*/
	  
 if($result){
	 unset($_SESSION['comp_id']);
	 move_uploaded_file($temp,"../uploads/project/".$photo);
	  move_uploaded_file($profile_temp,"../uploads/profile/".$profile);
	   $_SESSION['msg']='<span class="alert alert-info"><strong>Project Submitted Successfully, Please Wait For Verification.</strong> </span>';
	 
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
	
	//$daud=$_POST['perk'];
//(	$array= (explode("|imabc|",$daud)));
 //$perkid=$array[0];
//$amount=$array[1];
//print_r($_POST);
//exit;
//,
	// perk_id='$perkid'
	foreach($_POST as $key => $y)
	{
		$$key = mysqli_real_escape_string($connect,$y);
	}
	extract($_POST);
	$invest=mysqli_query($connect,
	 "insert into tblinvestments set 
	 invest_amount='$perk',
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
$query = "select * from tblusers inner join tblproject on tblproject.UserID = tblusers.UserID where tblproject.p_id = $project";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$to     = $row['Email'];

$subject ='Investment in Your Project   '.$row['p_title'];

$message="<table bgcolor='#ffffff' width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent' align='center'  style='font-family:Helvetica, Arial,serif;'>
  <tbody>
    <tr>
      <td><table width='600' border='0' cellspacing='0' cellpadding='0' align='center' bgcolor='#ffffff' class='MainContainer'>
  <tbody>
    <tr>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' width='40'>&nbsp;</td>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
  <!-- =============================== Header ====================================== -->   
    <tr>
    	<td height='75' class='spechide'></td>
        
        <!-- =============================== Body ====================================== -->
    </tr>
    <tr>
      <td class='movableContentContainer ' valign='top'>
      	<div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td height='35'></td>
    </tr>
    <tr>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' align='center' class='specbundle'><div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable'>
                                  <p style='text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;'><span class='specbundle2'><span class='font1'>Hello ". $row['p_fname']."   ". $row['p_lname']."</span></span></p>
                                </div>
                              </div></td>
     
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
		<div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                         
                          <tr>
                            <td align='left'>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable' align='center'>
                                  <h5>
  It is to inform that ". $fname . " " .$lname." has invested an amount of Rs ".$perk." in your project. His email is ".$email."
 and his cell  No is ".$cellno .". 
 To approve that you have received the above amount Click Button. Once you approve his Amount Your Contact information Will be Shared Automatically with investor via Mail  </h5>

                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td align='center'>
                              <table>
                                <tr>
                                  <td align='center' bgcolor='#1A54BA' style='background:#1A54BA; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='center'>
                                        <a target='_blank' href='http://kpgoestech.com/crowddurshal/layout.php?tabe=rasied' class='link2' style='color:#ffffff;'>Confirm Amount</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height='20'><h3>Sent by Crowd Durshal: 134, Industrial Estate, Hayatabad، Peshawar 25000</h3></td></tr>
                        </table>
        </div>


";
 /*$message = 
'<h1>Hello '. $row['p_fname'].'  '. $row['p_lname'].'</h1>'.
 '  It is to inform that '. $fname . '  '.$lname. 'has invested an amount of  '.$amount .'in your project.'.'<br/>'.
' To approve that you have received the above amount'.'</br>'.
 '<span style="
 height:15px;
	width:20px;
	background:#FFF;
	background:#9EFF3E;
	padding:10px;
	text-align:center;
"><a href=" http://kpgoestech.com/crowddurshal/layout.php?tabe=rasied">Confirm Your Amount</a></span>'.'<br>'.
  'Or Click On the Link Below'.'<br>'.
' http://kpgoestech.com/crowddurshal/layout.php?tabe=rasied'.'<br>'.

 'Sent by Crowd Durshal: 134, Industrial Estate, Hayatabad، Peshawar 25000
 ';*/

$headers = 'From: info@kpgoestech.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" ."MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n".
    'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
	 if($invest)
	    {
		 $_SESSION['msg']='<span class="alert alert-success">Thanks for Investing.Once your payment
		  is approved by the Project team. His contact information will be Shared With you via email
		 </span>';
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