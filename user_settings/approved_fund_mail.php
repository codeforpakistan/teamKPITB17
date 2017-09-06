<?php
$to     = $_POST['email'];
$headers = 'From: info@kpgoestech.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" ."MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n".
    'X-Mailer: PHP/' . phpversion();
$subject ='Approved your fund in '.$row['p_title']. ' project';
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
                                  <p style='text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;'><span class='specbundle2'><span class='font1'>Hello " . $_POST['investerName'] . "</span></span></p>
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
  It is to inform that ". $row['c_name']." company has been accepted your fund of Rs ".$_POST['amount'] ."in ". $row['p_title'] ." project.</h5>
<h5>Project owner name: ". $row['FirstName'] ." ".$row['LastName'] ."</h5>
<h5>Project owner phone: ". $row['phone'] . "</h5>
<h5>Project owner email: ". $row['Email'] . "</h5>
                                </div>
                              </div>
                            </td>
                          </tr>
                          
                          <tr><td height='20'><h3>Sent by Crowd Durshal: 134, Industrial Estate, Hayatabad، Peshawar 25000</h3></td></tr>
                        </table>
        </div>


";

mail($to, $subject, $message, $headers);
?>