<?php
//include('control_panel/user_security.php'); 
require_once 'control_panel/config/config.php';
 require_once 'control_panel/config/connection.php';
 require_once 'control_panel/classes/main_function.php';
 ?>
 <!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Crowd Durshal HTML5 Template">
<meta name="description" content="Crowd Durshal is a KP Crowd Funding Platform">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Raising Finance | Crowd Durshal</title> 


<!-- ************************ CSS Files ************************ -->

<!-- Bootstrap CSS -->
<?php include('includes/links.php'); ?>

<!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
  .bx-wrapper {
    padding: 100px 0px;
  }
  .main-img {
  	margin-left: 0px;
	margin-right: 0px;
  }
</style>
</head>

<body>
<div class="wrapper"> 
  <!-- Header ************************ -->
  <?php include('includes/header.php'); ?>
  
  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom" style="background-image:url(assets/images/robo-slider-01.jpg);">
    <article>
        <div class="container"><h1 style="padding-top:120px">Raising Capital</h1>
        <br>
<h5 style="color:#FFF;">Pitch your idea and get access to high profile investors in one place.</h5>
      </div>
      <div class=" inner-banner-arrow arrow bounce">

                     </div>
    </article>

 


  </section>
<!--  <div class="row main-img">
  <img src="assets/images/robo-slider-01.jpg" width="2000" height="450" />
    <div class="container"><h1 style="color: #80c336;"></h1>
    <p style="font-size: 1.5em;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
    </div>
  </div>-->
  <section class="white" style="padding: 0px 0px; margin:30px;">
    <article class="container enterprenuer-section" id="intor-section">
      <ul>

       <li class="text-area">
    <span class="intro-icon avater"><img src="assets/images/RF1-01.png" width="160" ><!-- <i class="icon-ideas"></i> --></span>
          <strong>Localized Crowdfunding <span class="line-green"></span></strong><p align="justify">Being Pakistan’s first government based first crowdfunding platform, we provide local entrepreneurs with an opportunity to 
          share their ideas and convert it into a viable business.</p>
        </li>
      
      <li class="text-area">
          <span class="intro-icon avater"><img src="assets/images/RF2-01.png" width="160"><!-- <i class="icon-community2"></i> --></span>
          <strong>Access to Investors <span class="line-yellow"></span></strong><p align="justify">We make sure to connect you with high profile local and international backers to help you raise funds for your product. If your product has the right potential, it might lead to a successful investment round.</p>
          
        </li>
    
       <!--  <li class="plus-icon">&nbsp;</li>
 -->   <li class="text-area">
          <span class="intro-icon avater"><img src="assets/images/RF3-01.png" width="160"><!-- <i class="icon-publicpower"></i> --></span>
          <strong>Achieve Your Goal <span class="line-red"></span></strong><p align="justify">Pitch your idea with a growth-oriented approach, set a goal and achieve it in a matter of days. The better the idea is, the more are the chances of a successful campaign.</p>

        </li>
   
      </ul>
    </article>
  </section>



  <section class="white" style="padding: 0px 0px;">
    <article class="container enterprenuer-section" id="intor-section">
      <ul>
  
       <li class="text-area">
    <span class="intro-icon avater"><img src="assets/images/RF4-01.png" width="160" ><!-- <i class="icon-ideas"></i> --></span>
          <strong>Extend your reach <span class="line-green"></span></strong> <p align="justify">Make your dream a reality by reaching out to a pool of backers and give yourself a chance to explore new entrepreneurial horizons. We strengthen your vision by letting you share your innovations with the world.</p> 

        </li>
      
    <li class="text-area">
          <span class="intro-icon avater"><img src="assets/images/RF5-01.png" width="160"><!-- <i class="icon-community2"></i> --></span>
          <strong>Pitch, Raise, Done <span class="line-yellow"></span></strong><p align="justify"> Idea pitched? Targeted funds raised? Built a customer base? If yes, then don’t forget to deliver what you promised. Remember, sales cure all!</p>

          
        </li>
 
  
      </ul>
    </article>
  </section>
<section class="white" style="padding: 0px 0px; margin:40px;">
    <article class="container button-section" id="intor-section">
     <div class="row">
    
      <div class="col-lg-3 col-md-3 col-sm-3">
    
        </div>
      
       <a href="about.php"> 
      <div class="col-lg-3 col-md-3 col-sm-3">
      <label>Want to pitch an idea? </label>
      <br/>
       <button class="btn btn-success">Click here</button>
        
        </div>
       </a> 
     
      
        <a href="about.php"> 
      <div class="col-lg-3 col-md-3 col-sm-3">
      <label>Want to know more about us?</label>
      <br>
       <button class="btn btn-success">Find here</button>
        
        </div>
       </a>
     <div class="col-lg-3 col-md-3 col-sm-3">
      
        </div>
        </div>
    </article>
  </section>
<section class="gray">
    <article class="container" id="ourbakers">
      <h3>Our Backers</h3>
      <div class="logo-carousels">
      <?php 
          $query = new database();
          $sql = "select * from tblbackers where status = '1'";
          $rows = $query->select_record($sql);
          foreach($rows as $row) {
            echo '<div class="slide"><img src="control_panel/uploads/backers/' . $row['img'] . '" alt="' . $row['title'] . '">
			<label>&nbsp;</label>
			<h5>'.$row['title'].'</h5>
			</div>';
          }
      ?>
        
        
      </div>
    </article>
  </section>


  <section class="white team" id="our-team">
    <article class="container">
     <h3>Our Success Stories</h3>
     <p  align="center">We have enabled local ideas to attain new heights by connecting them with the right investors.</p>

      <div class="row">
         <?php 

        $success=mysqli_query($connect, "select p_id, p_photo, p_future, p_title,p_desc from tblproject where p_future  = 'yes'");
while($rec_success=mysqli_fetch_array($success)){
         ?>
        
         <a href="project-single.php?project=<?php echo $rec_success['p_id']; ?>"> 
        <div class="col-lg-3">
          <div class="team-item">
            <figure class="team-image">
              <figcaption></figcaption>
              <img src="control_panel\uploads\project/<?php echo $rec_success['p_photo']; ?>">
            </figure>
            <div class="team-content">
              <h5><a href="#"><?php echo $rec_success['p_title']; ?> <span class="line-red"></span> <span><?php echo $rec_success['p_desc']; ?></strong>
        </li></span></a></h5>
            </div>
            <div class="team-social">
              <ul>
                <li class="fb"><a href="#" class="transition-all"><i class="fa fa-facebook"></i></a></li>
                <li class="tw"><a href="#" class="transition-all"><i class="fa fa-twitter"></i></a></li>
                <li class="yt"><a href="#" class="transition-all"><i class="fa fa-youtube"></i></a></li>
                <li class="ln"><a href="#" class="transition-all"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
          </a>
         <?php } ?>
      </div>
    </article>
  </section>

  <!-- ************************ Footer ************************ -->
  
<?php include('includes/footer.php'); ?>
</div>

<!-- ************************ jQuery Scripts ************************ -->

<!-- jQuery (necessary for JavaScript plugins) -->
 <?php include('includes/js-links.php'); ?>
<script>
    $(document).ready(function() {
    
    });
</script>
</body>

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
</html>