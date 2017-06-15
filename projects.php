<?php
//include('control_panel/user_security.php'); 
require_once 'control_panel/config/config.php';
 require_once 'control_panel/config/connection.php';
 ?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/projects-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:21 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Crowd Durshal HTML5 Template">
<meta name="description" content="Crowd Durshal is a HTML5 Responsive Crowdfunding Template">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Projects | Crowd Durshal </title> 

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
  
  <!-- Header Bottom -->
  <section class="header-bottom">
    <article>
      <div class="container">
        <h1>Projects</h1>
      </div>
    </article>
  </section>
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
      
        <div class="col-lg-6">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index.php">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li>Projects</li>
          </ul>
        </div>
        <div class="col-lg-6 align-right sub-menu">
          <ul>
            <!--<li><a href="projects-2.php">Trending</a></li>
            <li><a href="projects-2.php">Final Countdown</a></li>
            <li><a href="projects-2.php">New This Week</a></li>
            <li><a href="projects-2.php">Most Funded</a></li>-->
            <li id="filter-toggle"><i class="icon-search-projects"></i><strong>Search Projects</strong></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  <section class="white filter">
    <article class="container">
      <form action="http://html.stackthemes.net/Crowd Durshal-preview/projects-2.php">
        <fieldset>
          <div class="form-group">
            <span class="filter-title">Search Projects</span>
          </div>
          <div class="form-group">
            <label for="categories"><strong>Categories</strong></label>
            <select id="categories" class="form-control arrow-down">
              <option value="">All Categories</option>
              <option value="Animals">Animals</option>
              <option value="Community">Community</option>
              <option value="Education">Education</option>
              <option value="Environment">Environment</option>
              <option value="Food">Food</option>
              <option value="Health">Health</option>
            </select>
          </div>
          <div class="form-group">
            <label for="city"><strong>City</strong></label>
            <input type="text" class="form-control" id="city" placeholder="City name">
          </div>
          <div class="form-group">
            <label for="country"><strong>Country</strong></label>
            <select id="country" class="form-control arrow-down">
              <option value="">All Countries</option>
              <option value="Australia">Australia</option>
              <option value="Canada">Canada</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="form-group">
            <label><strong>Percent Funded</strong></label>
            <div class="radio-inputs">
              <div class="form-group">
                <input type="radio" value="all" name="percent-funded" id="all" checked="checked" >
                <label for="all">All</label>
              </div>
              <div class="form-group">
                <input type="radio" value="50-75" name="percent-funded" id="5075" >
                <label for="5075">50% - 75%</label>
              </div>
              <div class="form-group">
                <input type="radio" value="75-100" name="percent-funded" id="75100" >
                <label for="75100">75% - 100%</label>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-4 green" style="margin-top: 32px;">Submit</button>
        </fieldset>
      </form>
    </article>
  </section>

       <div class="col-lg-12"><?php if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
										} ?>
                                        </div>
                                         <!-- Page Content -->
  <section class="gray">
    <article class="container projects-page" id="popular">
      <div class="row">
        <?php
      $project=mysqli_query($connect,"select * from tblproject where p_status='1' and p_verification ='1'");
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
                <p><?php  echo  $record['p_desc']; ?></p>
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
                  <li><strong><?php echo $bakers_record['bakers']; ?></strong> Backers</li>
                   <li><strong><?php echo $bakers_record['funded']; ?></strong> Funded</li>
                  <li class="last"><strong>RS:<?php echo $record['p_amount']; ?></strong>Target</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <?php } ?>
      <!--   <div class="col-lg-3">
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
                <div class="pie_progress" role="progressbar" data-goal="55" data-barcolor="#f2d031" data-barsize="7.1">
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
                <div class="pie_progress" role="progressbar" data-goal="65" data-barcolor="#3298c9" data-barsize="7.1">
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
                <div class="pie_progress" role="progressbar" data-goal="80" data-barcolor="#ef6342" data-barsize="7.1">
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
              <img src="assets/images/popular_1.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Help us to save the nature <span class="line-green"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_1.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="100" data-barcolor="#34cc99" data-barsize="7.1">
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
              <img src="assets/images/popular_2.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
                <h5><a href="#">Charity hospital <span class="line-yellow"></span></a></h5>
                <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_2.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="60" data-barcolor="#f2d031" data-barsize="7.1">
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
                <div class="pie_progress" role="progressbar" data-goal="35" data-barcolor="#3298c9" data-barsize="7.1">
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
        </div>
         -->
        <div class="clear"></div>
        <div class="popular-btn"> <a href="#">See More</a> </div>
      </div>
    </article>
  </section>
  
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

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/projects-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:21 GMT -->
</html>