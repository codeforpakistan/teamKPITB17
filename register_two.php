<?php
if(isset($_GET['project'])){
	$project=$_GET['project'];
	}

 ?>

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
   <div class="row">
      <div class="col-lg-12">
      
      <?php if(isset($_SESSION['msg'])){
		  echo '<div class="alert alert-dismissable alert-success center">'.$_SESSION['msg'].'</div>'; 
	  unset($_SESSION['msg']);
	  }
	  ?>
      
      </div>
      </div>
 <section class="gray">
    <article class="container">
      <div class="row">
             <div class="col-lg-4" style="border:solid; color:#000;">
             
            <h3>Contribute</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore. </p>
             <form action="control_panel/classes/user.php" class="form-ui" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
         
              <div class="form-group">
               
                  <input type="text"  class="form-control" placeholder="Contribute Amount" name="amount">
               
                <div class="clear"></div>
              </div>
          
              <div class="form-group">
                <button type="submit" class="btn btn-4 blue default">Contribute as Guest</button>
                <input type="hidden" name="project"  value="<?php echo $project; ?>"
                <input type="hidden" name="add" value="contribution" />
              </div>
              
            </div>
            <div align="center"><h3>OR</h3></div>
            </form>
            <form action="control_panel/classes/user.php" class="form-ui" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
              <div class="form-group">
               
                  <input type="email" value="" class="form-control" placeholder="Email" name="email">
              
              </div>
              <div class="form-group">
               
                  <input type="password" value="" class="form-control" placeholder="Password" name="password">
               
                <div class="clear"></div>
              </div>
          
              <div class="form-group">
                <button type="submit" class="btn btn-4 blue default">Submit</button>
               
                <input type="hidden" name="log" value="in" />
              </div>
              
            </div>
            
            </form>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-6"  style="border:solid; color:#000;">

            <h3>Sign Up here</h3>
            <p>Lorem ipsum dolor sit amet </p>
            
            <form action="control_panel/classes/user.php" class="form-ui" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="First Name" name="firstname">
                </div>
                <div class="form-right">
                  <input type="text" value="" class="form-control" placeholder="Last Name" name="lastname">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Email Address" name="email">
                </div>
                <div class="form-right">
                  <input type="text" value="" class="form-control" placeholder="User Name" name="nickname">
                </div>
                <div class="clear"></div>
              </div>
              
                <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-right">
                  <input type="text" value="" class="form-control" placeholder="Confirm Password" name="confrim">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-4 blue default">Register </button>
                 <input type="hidden" name="project"  value="<?php echo  $project; ?>"
                  <input type="hidden" name="add" value="user" />
              </div>
              
            </div>
            
            </form>
          </div>
               <div class="col-lg-2"></div> 
      </div>
    </article>
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