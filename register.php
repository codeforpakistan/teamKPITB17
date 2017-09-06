<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">
<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:18:32 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Crowd Durshal HTML5 Template">
<meta name="description" content="Crowd Durshal is a HTML5 Responsive Crowdfunding Template">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register | Crowd Durshal</title> 

<!-- ************************ CSS Files ************************ -->

<!-- Bootstrap CSS -->
<?php 
include('includes/links.php'); 
  
?>


<!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<div class="wrapper"> 
  <!-- ************************ Header ************************ -->
  <?php include('includes/header.php'); ?>
  
  <!-- ************************ Header Bottom | Page Title ************************ -->
 <!--  <section class="header-bottom">
    <article>
      <div class="container"><h1>Typography & Elements</h1></div>
    </article>
  </section> -->
  <!-- ************************ Breadcrumbs ************************ -->
 
  
  <!-- ************************ Page Content ************************ -->
  
  

  
<!--   <section class="white" id="how-it-works">
    <article class="container" id="intor-section">
      <h3>How It Works ?</h3>
      <ul>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-ideas"></i></span>
          <strong>Send Your Ideas <span class="line-green"></span> </strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-community2"></i></span>
          <strong>Share With Community <span class="line-yellow"></span> </strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-publicpower"></i></span>
          <strong>Collect Funds <span class="line-red"></span> </strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
      </ul>
    </article>
  </section> -->

 <section class="gray">
    <div class="row text-center" style="padding: 30px 0px;">
      <?php if(isset($_SESSION['msg'])){
      echo $_SESSION['msg']; 
    unset($_SESSION['msg']);
    }
    ?>
      
    </div>
 <?php if(isset($_GET['login'])){

include('includes/login.php');

 } 
elseif(isset($_GET['signup']))
{

  include('includes/signup.php');
}
 ?>
 </section> 
 
 
  

 
  
  <!-- ************************ Footer ************************ -->
  
<?php include('includes/footer.php'); ?>
</div>


<!-- ************************ jQuery Scripts ************************ -->

<!--  jQuery (necessary for JavaScript plugins) -->
 <?php include('includes/js-links.php'); ?>

</body>
<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:18:32 GMT -->
</html>