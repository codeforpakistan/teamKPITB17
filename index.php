<?php
//include('control_panel/user_security.php'); 
require_once 'control_panel/config/config.php';
 require_once 'control_panel/config/connection.php';
  require_once 'control_panel/classes/main_function.php';
 ?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from html.stackthemes.net/fundz-preview/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:15:16 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="KP Crowd Funding PlatForm">
<meta name="description" content="KP Crowd Funding PlatForm">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="assets/images/c.png"/>
<!-- Facebook POstss -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=494347577571658";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Facebook POstss -->
<title> HOME | Crowd Durshal </title> 

<!-- Bootstrap CSS -->
<?php include('includes/links.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    jQuery(window).load(function(){
        jQuery(".hameid-loader-overlay").fadeOut(200);
    });
</script>
<link type="text/css" rel="stylesheet" href="assets/css/arrow.css">
<style type="text/css">
.hameid-loader-overlay {
   width: 100%;
   height: 100%;
   background: url('assets/images/preloader.gif') center no-repeat #ecf0f1 ;
   z-index: 99999;
   position: fixed;
}
.tp-banner {
  max-height: 530px !important;
}

</style>

<noscript>
    <style>.hameid-loader-overlay { display: none; } </style>
</noscript>
</head>

<body>
   <div class="hameid-loader-overlay"></div> 
<div class="wrapper"> 
  <!-- Header -->
 <?php include('includes/header.php'); ?>
  
  <!-- Revolution Slider -->
  <section class="main-slider">
    <article>
      <div class="tp-banner-container">
        <div class="tp-banner" >
          <ul>
            <!-- SLIDE 1 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="PARK AT BIRDCAGE WALK">
              <!-- MAIN IMAGE -->
              <img src="assets/images/dummy.png"  alt="slidebg1" data-lazyload="assets/images/clock-slider-01.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
            
              <a href="projects.php"><div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0 invest-btn"
                data-x="205"
                data-y="340" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#6EBF4B; font-size:16px;"><strong>Invest Capital</strong>
              </div></a>
                <?php if(!isset($_SESSION['userid']))
        {
        echo ' <a href="register.php?signup">'; 
        }
        else{
          echo ' <a href="company.php">'; 
          
          }
         ?>
                <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0 raise-btn"
                data-x="380"
                data-y="340" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#00A7E1; font-size:16px;">
              <strong>Raise Funds</strong>
                
               
              </div></a>

             <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="100"
                data-y="170" 
                data-customin="x:0;y:0;z:0;rotationX:0;
                rotationY:0;rotationZ:0;scaleX:0;
                scaleY:0;skewX:0;skewY:0;
                opacity:0;
                transformPerspective:600;
                transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; ">
                  <div style="text-align:center; font-size; font-size:50px; font-weight:bold;"> 
                  FROM IMAGINATION  <br><br><br><span>TO REALITY</span>

                  </div>
              </div>
            
              <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="60"
                data-y="280" 
                data-customin="x:0;y:0;z:0;rotationX:0;
                rotationY:0;rotationZ:0;scaleX:0;
                scaleY:0;skewX:0;skewY:0;
                opacity:0;
                transformPerspective:600;
                transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; ">
                    <p style="text-align: center; font-size:18px;">We aim to provide ventures with opportunities 
                  to attain new<br> entrepreneurial heights via capital investments</p>
                
                    <div class="clear"></div>
            </li>

         <!-- SLIDE 1 -->

            <!-- SLIDE 2 -->



                <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="PARK AT BIRDCAGE WALK">
              <!-- MAIN IMAGE -->
              <img src="assets/images/dummy.png"  alt="slidebg1" data-lazyload="assets/images/clock-slider-01.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
            
              <a href="projects.php"><div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0 invest-btn"
                data-x="205"
                data-y="340" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#6EBF4B; font-size:16px;"><strong>Invest Capital</strong>
              </div></a>
                <?php if(!isset($_SESSION['userid']))
        {
        echo ' <a href="register.php?signup">'; 
        }
        else{
          echo ' <a href="company.php">'; 
          
          }
         ?>
                <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0 raise-btn"
                data-x="380"
                data-y="340" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#00A7E1; font-size:16px;">
              <strong>Raise Funds</strong>
                
               
              </div></a>
         
             <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="100"
                data-y="170" 
                data-customin="x:0;y:0;z:0;rotationX:0;
                rotationY:0;rotationZ:0;scaleX:0;
                scaleY:0;skewX:0;skewY:0;
                opacity:0;
                transformPerspective:600;
                transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; ">
                  <div style="text-align:center; font-size; font-size:50px; font-weight:bold;"> 
                  FROM IMAGINATION  <br><br><br><span>TO REALITY</span>

                  </div>
              </div>
            
              <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="60"
                data-y="280" 
                data-customin="x:0;y:0;z:0;rotationX:0;
                rotationY:0;rotationZ:0;scaleX:0;
                scaleY:0;skewX:0;skewY:0;
                opacity:0;
                transformPerspective:600;
                transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; ">
                  <p style="text-align: center; font-size:18px;">We aim to provide ventures with opportunities 
                  to attain new<br> entrepreneurial heights via capital investments</p>


                
                    <div class="clear"></div>
            </li>
         <!-- SLIDE 2 -->

            <!-- SLIDE 3 -->
              <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="PARK AT BIRDCAGE WALK">
              <!-- MAIN IMAGE -->
              <img src="assets/images/dummy.png"  alt="slidebg1" data-lazyload="assets/images/clock-slider-01.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
            
              <a href="projects.php"><div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0 invest-btn"
                data-x="205"
                data-y="340" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#6EBF4B; font-size:16px;"><strong>Invest Capital</strong>
              </div></a>
                <?php if(!isset($_SESSION['userid']))
        {
        echo ' <a href="register.php?signup">'; 
        }
        else{
          echo ' <a href="company.php">'; 
          
          }
         ?>
                <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0 raise-btn"
                data-x="380"
                data-y="340" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#00A7E1; font-size:16px;">
              <strong>Raise Funds</strong>
                
               
              </div></a>
         
             <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="100"
                data-y="170" 
                data-customin="x:0;y:0;z:0;rotationX:0;
                rotationY:0;rotationZ:0;scaleX:0;
                scaleY:0;skewX:0;skewY:0;
                opacity:0;
                transformPerspective:600;
                transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; ">
                  <div style="text-align:center; font-size; font-size:50px; font-weight:bold;"> 
                  FROM IMAGINATION  <br><br><br><span>TO REALITY</span>

                  </div>
              </div>
            
              <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="60"
                data-y="280" 
                data-customin="x:0;y:0;z:0;rotationX:0;
                rotationY:0;rotationZ:0;scaleX:0;
                scaleY:0;skewX:0;skewY:0;
                opacity:0;
                transformPerspective:600;
                transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2600"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.05"
                data-endelementdelay="0.1"
                style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; ">
                  <p style="text-align: center; font-size:18px;">We aim to provide ventures with opportunities 
                  to attain new<br> entrepreneurial heights via capital investments</p>

                
                    <div class="clear"></div>
            </li>

         

            <!-- SLIDE 3 -->
            
        
          </ul>
          <div class="tp-bannertimer"></div>
        </div>
      </div>
    </article>
  </section>
  
  <!-- Page Content -->
  <section class="white" id="daud">
    <article class="container" id="intor-section">
      <h3>Welcome to Crowd Durshal <br />KP’s First CrowdFunding Platform </h3>
      <ul>
     <a href="how_it_works.php"> 
       <li class="text-area">
    <span class="img-responsive intro-icon"><img src="assets/images/h2.svg" width="60" height="60"><!-- <i class="icon-ideas"></i> --></span>
          <strong>How It Works<span class="line-green"></span></strong> Explore how Crowd Durshal is shaping entrepreneurial ecosystem.
        </li>
       </a>
    <a href="raising_finance.php">     <li class="text-area">
          <span class="img-responsive intro-icon"><img src="assets/images/r1.svg" width="80" height="80"><!-- <i class="icon-community2"></i> --></span>
          <strong>Raising Capital <span class="line-yellow"></span></strong> Ready to pitch? Wait! Go through the guidelines to launch a successful campaign.
        </li>
    </a>
       <!--  <li class="plus-icon">&nbsp;</li>
 -->     <a href="statistics.php">    <li class="text-area">
          <span class="img-responsive intro-icon"><img src="assets/images/stats-01.svg" width="80" height="80"><!-- <i class="icon-publicpower"></i> --></span>
          <strong>Statistics <span class="line-red"></span></strong> Interested to back a project but not sure about success rate. Click to find out more.
        </li>
    </a>
      </ul>
    </article>
  </section>
  
  <section class="gray">
    <article class="container main" id="popular">
      <h3>Trending Projects</h3>
      <div class="row">
        <?php
      $projects=mysqli_query($connect,"select * from tblproject where p_status='1' and p_verification ='1' and p_popular ='yes' LIMIT 0 , 4");
       while($record=mysqli_fetch_array($projects))
      {
          $date = strtotime($record['p_date']);
                     $remaining = $date - time();
                     $days_remaining = floor($remaining / 86400);
                     $hours_remaining = floor(($remaining % 86400) / 3600);
                      $days = $days_remaining + $record['p_duration'] ;
                     if ($days < 0 ) {
                      $id = $record['p_id'];
                      $sql = "UPDATE tblproject SET p_status='0' WHERE p_id='$id'";
                      mysqli_query($connect, $sql);
                      continue;
                      }
         ?>

       
      
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php?project=<?php echo $record['p_id']; ?>">View Details</a></figcaption>
              <img src="control_panel/uploads/project/<?php echo $record['p_photo']; ?>" alt="img" width="150" height="300" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#"><?php echo $record['p_title']; ?><span class="line-green"></span></a></h5>
                <p><?php  echo $record['p_desc']; ?></p>
              </div>
               <?php $bakers=mysqli_query($connect,"select sum(invest_amount) as funded, count(UserID) as bakers from  tblinvestments where p_id='".$record['p_id']."' and invest_status='1'");
      $num=mysqli_num_rows($bakers);
      
      $bakers_record=mysqli_fetch_array($bakers);
    $percent=$bakers_record['funded'] / $record['p_amount'] * 100 ;
       ?>
              <div class="popular-data"> <img src="control_panel/uploads/profile/<?php echo $record['p_profile']; ?>" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="<?php echo $percent; ?>" data-barcolor="#34cc99" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">

                <ul>
                 <?php 
          $date = strtotime($record['p_date']);
                     $remaining = $date - time();
                     $days_remaining = floor($remaining / 86400);
                     $hours_remaining = floor(($remaining % 86400) / 3600);
                      $days= $days_remaining + $record['p_duration'] ;
           ?>
                  <li><strong><?php echo $days; ?></strong> Days Left</li>
                  <li><strong>RS:<?php echo $bakers_record['bakers']; ?></strong> Backers</li>
                   <li><strong><?php if( $bakers_record['funded'] == 0){ echo '0'; } else { echo $bakers_record['funded']; } ?></strong> Funded</li>
                  <li class="last"><strong>RS:<?php echo $record['p_amount']; ?></strong>Target</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="popular-btn green"> <a href="projects.php">See More</a> </div>
    </article>
  </section>
  
  <section class="parallax events singal">
     <div class="col-lg-6 col-md-6 col-xs-12">
      <div class="col-xs-12"><br><br></div>
   <iframe width="630" height="400" src="https://www.youtube.com/embed/videoseries?list=PLaaDzrUGzUfZCLzpvicoYuARARv-FNhrZ" frameborder="0" allowfullscreen></iframe> 
   </div>
   <div class="col-lg-3 col-md-3 col-xs-12">
      <div class="col-xs-12"><br><br></div>
   <div class="fb-page" data-href="https://www.facebook.com/kpitbgov/" data-tabs="timeline" data-width="290" data-height="400"
    data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
    <blockquote cite="https://www.facebook.com/kpitbgov/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kpitbgov/">
   Khyber Pakhtunkhwa Information Technology Board - KPITB</a></blockquote></div>
   </div>

   
  
   <div class="col-lg-3  col-md-3 col-xs-12">
    <div class="col-xs-12"><br><br></div>
   <a class="twitter-timeline" href="https://twitter.com/kpitbgov" data-width="290"
  data-height="400">Tweets by kpitbgov</a> 
   <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>   
   </div>
  </section>
   <h3 class="text-center" style="padding: 60px 0px 20px 0px;">Our Backers</h3>
  <section class="white">

    <article class="container" id="ourbakers">
      <div class="logo-carousels">
      <?php 
          $query = new database();
          $sql = "select * from tblbackers where status = '1'";
          $rows = $query->select_record($sql);
          foreach($rows as $row) {
            echo '<div class="slide"><img src="control_panel/uploads/backers/' . $row['img'] . '" alt="' . $row['title'] . '"></div>';
          }
      ?>
        
        
      </div>
    </article>
  </section>
  
<!--  <section class="map-container">
    <div id="map-desc"><h3>Together. We transform more than 20 spaces!</h3></div>
    <div id="projects-map"></div>
  </section>-->
  
  <!-- <section class="send-us">
    <article class="container">
      <h3>Have a Community Project in Need of Funding?</h3>
      <a href="#" class="btn btn-3 green">Send to us</a>
    </article>
  </section> -->
  
  <?php include('includes/footer.php'); ?>
</div>

<!-- jQuery (necessary for JavaScript plugins) -->
 <?php include('includes/js-links.php'); ?>
 <script>
   $(function() {
    $('.arrow').click(function() {
       $('html, body').animate({
        scrollTop: $("#daud").offset().top
    }, 1000);
    });
});
 </script>
</body>

<!-- Mirrored from html.stackthemes.net/fundz-preview/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:15:16 GMT -->
</html>