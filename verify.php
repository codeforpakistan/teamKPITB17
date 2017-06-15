<?php 
require_once 'control_panel/config/config.php';
require_once 'control_panel/config/connection.php';
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = mysqli_escape_string($connect, $_GET['email']); // Set email variable
    $hash = mysqli_escape_string($connect, $_GET['hash']); // Set hash variable
	//$daud="select * from usercompany where c_email='$email' and hash='$hash";
    $search=mysqli_query($connect,"select * from usercompany where c_email='$email' and hash='$hash'");
	$search_fetch=mysqli_fetch_array($search);
    $num=mysqli_num_rows($search)or die(mysql_error());
    if($num > 0 ){

        $update=mysqli_query($connect , "update usercompany set c_status='1' where c_email='$email' and hash= '$hash' ");
        $_SESSION['status']='1';

        if($update)
        {
 $_SESSION['userid']=$search_fetch['UserID'];
 $_SESSION['comp_id']=$search_fetch['c_id'];
// $daudss="select * from tblusers where UserID = '".$search_fetch['UserID']."'";
 $user=mysqli_query($connect, "select * from tblusers where UserID = '".$search_fetch['UserID']."'");
 $rec=mysqli_fetch_array($user);
 $_SESSION['firstname']=$rec['FirstName'];
   $_SESSION['lastname']=$rec['LastName'];
   $_SESSION['email']=$rec['Email'];
    $_SESSION['phone']=$rec['phone'];
	   $_SESSION['address']=$rec['address'];
	    $_SESSION['msg']='<span class="alert alert-info"><strong>Your Email Has Been Verified Process Now</strong> </span>';
            header('location:pitch.php');
            exit();
        }

        else{
$_SESSION['userid']=$_GET['userid'];
header('location:profile.php?error');
            exit();

        }
    }
}

if(isset($_GET['cid']) && $_GET['cid'] != '')
{
$cid=$_GET['cid'];
$name=$_GET['name'];
$userid=$_SESSION['userid'];
$check=mysqli_query($connect , "select * from usercompany where c_id='$cid'  and UserID = '$userid'");
$record=mysqli_fetch_array($check);
$num=mysqli_num_rows($check);
if($record['c_status'] == 1){
$_SESSION['comp_id']=$record['c_id'];
$_SESSION['comp_name']=$record['c_name'];
header('location:pitch.php?name='.$name.'');
exit();

}
elseif($record['c_status'] == 0){
	$email=$record['c_email'];
	$hash=$record['hash'];
	
	//////////////////// mail function /////////////////
	
	 $to     = $email;
$subject = 'Company Email Verification';
$user=$_SESSION['userid'];
$name=$_SESSION['name'];
$name = str_replace(' ', '', $name);
$message = 'Please click this link to activate your account:
http://daud.pakec.com/verify.php?email='.$email.'&&hash='.$hash.'
 
'; // Our message above including the link';
$headers = 'From: md_dcservices.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
	//////////////////// mail Function /////////////////
	
	if(mail)
{
 $_SESSION['msg']='<span class="alert alert-info"><strong>Please Check Your Email For  For Verification</strong> </span>';	
header('location:../../layout.php?tabe=companies');
exit();
}
else{
	
	 $_SESSION['msg']='<span class="alert alert-info"><strong> Error Occur Or Incorrect Email Adress  </strong> </span>';	
header('location:../../layout.php?tabe=companies');
exit();
	
	
	}
	
	
	}
else{
	$_SESSION['msg']="Sorry Your Company is not  Email Verified";
	header("location:layout.php?tabe=companies");
	exit();
	
	}
}



?>