<?php 
require_once 'control_panel/config/config.php';
require_once 'control_panel/config/connection.php';
include('control_panel/user_security.php'); 
require_once 'control_panel/classes/main_function.php';
$query = new database();

?><!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Crowd Durshal HTML5 Template">
<meta name="description" content="Crowd Durshal is a HTML5 Responsive Crowdfunding Template">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Company | Crowd Durshal</title> 


<!-- ************************ CSS Files ************************ -->

<!-- Bootstrap CSS -->
<?php include('includes/links.php'); ?>


<!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div class="wrapper"> 
  <!-- ************************ Header ************************ -->
  <?php include('includes/header.php'); ?>
  
  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container"><h3>User Control Panel </h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->

  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container">
      
      <!-- ************************ Form Area Start ************************ -->
       <?php
                     
                    echo_message();

                ?>
     <ul class="nav nav-tabs">
      <li class="<?php echo ($_GET['tabe'] == 'profile')?'active':''; ?>"><a href="layout.php?tabe=profile"><i class="fa fa-fw fa-user"></i>Profile</a></li>
      <li class="<?php echo ($_GET['tabe'] == 'companies')?'active':''; ?>"><a href="layout.php?tabe=companies"><i class="fa fa-fw fa-building"></i>Companies</a></li>
      <li class="<?php echo ($_GET['tabe'] == 'projects')?'active':''; ?>"><a href="layout.php?tabe=projects"><i class="fa fa-fw fa-lightbulb-o"></i>Projects</a></li>
      <li class="<?php echo ($_GET['tabe'] == 'investments')?'active':''; ?>"><a href="layout.php?tabe=investments"><i class="fa fa-bar-chart fa-gear"></i>Investments</a></li>
      <li class="<?php echo ($_GET['tabe'] == 'settings')?'active':''; ?>"><a href="layout.php?tabe=settings"><i class="fa fa-fw fa-gear"></i>Settings</a></li>
     <!-- <li class="pull-right"> <a href="company.php"><button class="btn btn-info">Start Project</button></a></li>-->
   
    </ul>
  
    
          <?php 
              $page = 'user_settings/'.$_GET['tabe'].'.php';
             include($page); 
             ?>
      
      <!-- ************************ Form Area End ************************ -->
      
    </article>
  </section>
  
  <!-- ************************ Footer ************************ -->
  
<?php include('includes/footer.php'); ?>
</div>

<!-- ************************ jQuery Scripts ************************ -->

 <?php include('includes/js-links.php'); ?>

</body>

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
</html>