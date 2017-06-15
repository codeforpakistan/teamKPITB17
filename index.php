<?php
//include('control_panel/user_security.php'); 
require_once 'control_panel/config/config.php';
 require_once 'control_panel/config/connection.php';
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
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> HOME | Crowd Durshal </title> 

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
  <!-- Header -->
 <?php include('includes/header.php'); ?>
  
  <!-- Revolution Slider -->
  <section class="main-slider">
    <article>
      <div class="tp-banner-container">
        <div class="tp-banner" >
          <ul>
            <!-- SLIDE 1 -->
           
            <!-- SLIDE 2 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="PARK AT BIRDCAGE WALK">
              <!-- MAIN IMAGE -->
              <img src="assets/images/dummy.png"  alt="slidebg1" data-lazyload="assets/images/clock-slider-01.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
            
              <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0"
                data-x="45"
                data-y="400" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#069; font-size:16px;"><a href="projects.php"><strong>Invest Your Money</strong></a>
              </div>
              
                <div class="tp-caption style_h_2 customin tp-resizeme rs-parallaxlevel-0"
                data-x="240"
                data-y="400" 
                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                data-speed="500"
                data-start="2350"
                data-easing="Back.easeOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; background-color:#090; font-size:16px;">
                <?php if(!isset($_SESSION['userid']))
				{
				echo ' <a href="register.php?signup"><strong>Raising Finance</strong></a>';	
				}
				else{
					echo ' <a href="company.php"><strong>Raising Finance</strong></a>';	
					
					}
				 ?>
                
               
              </div>
         
              <div class="tp-caption style_h_1 skewfromrightshort tp-resizeme rs-parallaxlevel-0"
                data-x="45"
                data-y="221" 
                data-speed="500"
                data-start="2250"
                data-easing="Power3.easeInOut"
                data-splitin="chars"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Innovation at Hand's Length
              </div>
            
              <div class="tp-caption style_p_1 customin tp-resizeme rs-parallaxlevel-0"
                data-x="45"
                data-y="300" 
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
                  <div style="text-align:center;">Pellentesque pharetra sapien non quam placerat vestibulum.
                   ex semper eu. Etiam sagittis ante eget nisi tempus,
                  r</div>
                </div>
                
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
  <section class="white">
    <article class="container" id="intor-section">
      <h3>Welcome to Crowd Durshal <br />This is First Crowd Funding Platform In KPK </h3>
      <ul>
     <a href="about.php"> 
       <li class="text-area">
    <span class="intro-icon"><img src="assets/images/3.png" width="80" height="80"><!-- <i class="icon-ideas"></i> --></span>
          <strong>How It Works<span class="line-green"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
       </a>
    <a href="about.php">     <li class="text-area">
          <span class="intro-icon"><img src="assets/images/2.png" width="80" height="80"><!-- <i class="icon-community2"></i> --></span>
          <strong>Raising Finance <span class="line-yellow"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
    </a>
       <!--  <li class="plus-icon">&nbsp;</li>
 -->     <a href="about.php">    <li class="text-area">
          <span class="intro-icon"><img src="assets/images/1.png" width="80" height="80"><!-- <i class="icon-publicpower"></i> --></span>
          <strong>Statistics <span class="line-red"></span></strong> Etiam porta sem malesuada mama rnolis euismod. Lorem osun.
        </li>
    </a>
      </ul>
    </article>
  </section>
  
  <section class="gray">
    <article class="container main" id="popular">
      <h3>Popular at Fundz</h3>
      <div class="row">
        <?php
      $project=mysqli_query($connect,"select * from tblproject where p_status='1' and p_verification ='1' and p_popular ='yes'");
      while($record=mysqli_fetch_array($project))
      {

         ?>
      
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php?project=<?php echo $record['p_id']; ?>">View Details</a></figcaption>
              <img src="control_panel/uploads/project/<?php echo $record['p_photo']; ?>" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#"><?php echo $record['p_title']; ?><span class="line-green"></span></a></h5>
                <p><?php  echo substr($record['p_desc'],6); ?></p>
              </div>
               <?php $bakers=mysqli_query($connect,"select sum(invest_amount) as funded, count(UserID) as bakers from  tblinvestments where p_id='".$record['p_id']."'");
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
                   <li><strong><?php echo $bakers_record['funded']; ?></strong> Funded</li>
                  <li class="last"><strong>RS:<?php echo $record['p_amount']; ?></strong>Target</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <?php } ?>
       <!-- <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php">View Details</a></figcaption>
              <img src="assets/images/popular_2.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Charity hospital <span class="line-yellow"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_2.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#f2d031" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
             <div class="popular-details">
                <ul>
                 <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php">View Details</a></figcaption>
              <img src="assets/images/popular_3.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">We Can Build Our Church <span class="line-blue"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_3.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#3298c9" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="project-single.php">View Details</a></figcaption>
              <img src="assets/images/popular_4.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Flood affected people <span class="line-red"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_4.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#ef6342" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Completed</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Days Left</li>
                  <li><strong>175</strong> Backers</li>
                  <li class="last"><strong>R$7.000,00</strong> Funded</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>-->
      </div>
      <div class="popular-btn green"> <a href="projects.php">See More</a> </div>
    </article>
  </section>
  
  <section class="parallax events singal">
    <article class="container">
      <h3>Upcoming Events</h3>
      <div class="row upcoming-events">
        <div class="col-lg-4">
          <div class="green">
            <h4>Fundraising Seminar <span></span></h4>
            <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum.</p>
            <span class="time-countdown" data-year="2018" data-month="3" data-day="17"></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="yellow">
            <h4>Fundraising Seminar <span></span></h4>
            <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum.</p>
            <span class="time-countdown" data-year="2018" data-month="7" data-day="17"></span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="red">
            <h4>Fundraising Seminar <span></span></h4>
            <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat condimentum.</p>
            <span class="time-countdown" data-year="2018" data-month="5" data-day="17"></span>
          </div>
        </div>
      </div>
    </article>
  </section>
  
  <section class="white">
    <article class="container" id="ourbakers">
      <h3>Our Backers</h3>
      <div class="logo-carousels">
        <div class="slide"><img src="assets/images/backers/1.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/2.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/3.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/4.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/5.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/6.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/7.png" alt="Our Backers"></div>
        <div class="slide"><img src="assets/images/backers/8.png" alt="Our Backers"></div>
      </div>
    </article>
  </section>
  
<!--  <section class="map-container">
    <div id="map-desc"><h3>Together. We transform more than 20 spaces!</h3></div>
    <div id="projects-map"></div>
  </section>-->
  
  <section class="send-us">
    <article class="container">
      <h3>Have a Community Project in Need of Funding?</h3>
      <a href="start.php" class="btn btn-3 green">Send to us</a>
    </article>
  </section>
  
  <?php include('includes/footer.php'); ?>
</div>

<!-- jQuery (necessary for JavaScript plugins) -->
 <?php include('includes/js-links.php'); ?>
</body>

<!-- Mirrored from html.stackthemes.net/fundz-preview/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:15:16 GMT -->
</html>