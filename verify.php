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
	/*$message = '
Welcome to Crowd Durshal - A place designed to give your startup a new life.</br>
<span><a href="http://kpgoestech.com/crowddurshal/verify.php?email='.$email.'&&hash='.$hash.'">Confirm Your Email</a></span>
  <br/>
  In case button is not working, please click on the link below:</br>
http://kpgoestech.com/crowddurshal/verify.php?email='.$email.'&&hash='.$hash.'
<br/>
<h3>Sent by Crowd Durshal: 134, Industrial Estate, Hayatabad، Peshawar 25000</h3>

';*/
	 $to     = $email;
$subject = 'Company Email Verification';
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
                                  <p style='text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;'><span class='specbundle2'><span class='font1'>Welcome to Crowd Durshal;</span></span></p>
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
                                  <h2 >Welcome to Crowd Durshal - A place designed to give your startup a new life</h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height='15'> </td></tr>

                         

                          <tr><td height='55'></td></tr>

                          <tr>
                            <td align='center'>
                              <table>
                                <tr>
                                  <td align='center' bgcolor='#1A54BA' style='background:#1A54BA; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='center'>
                                        <a target='_blank' href='http://kpgoestech.com/crowddurshal/verify.php?email=".$email."&&hash=".$hash."' class='link2' style='color:#ffffff;'>Activate your Company</a>
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


 // Our message above including the link';
$headers = 'From: info@kpgoestech.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" ."MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n".
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
	//////////////////// mail Function /////////////////
	
	if(mail)
{
 $_SESSION['msg']='<span class="alert alert-info"><strong>Please Check Your Email For  For Verification</strong> </span>';	
header('location:./company.php');
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