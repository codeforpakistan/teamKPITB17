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

<title>Statistics | Crowd Durshal</title> 


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
  .css_bar_graph {
    width: 590px !important;
  }

  .stats-banner {
    padding: 0px 15px;
    margin-bottom: -48px;
  }
  .progress {
    height: 30px;
    margin-bottom: 20px;
    border-radius: 0px;
    background-color: #ffffff;
    border: solid 2px #a9a9a9;
  }
  .progress-bar {
    font-size: 20px;
    line-height: 25px;
    background-color: #4b4b4b;
  }
  .row > .col-lg-6 > .container {
    position: absolute;
    height: 30%;
    text-align: center;
    width: 100%;
    margin: auto;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
  }
</style>
</head>

<body>
<div class="wrapper"> 
  <!-- Header ************************ -->
  <?php include('includes/header.php'); ?>
  
  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom" style="background-image:url(assets/images/statsbanner-01.png);">
    <article>
        <div class="container"><h1 style="padding-top:120px">Statistics</h1>
        <br>
<h5 style="color:#FFF;">Add your company’s information carefully as it can fasten the verification process significantly.</h5>
      </div>
      <div class=" inner-banner-arrow arrow bounce">

                     </div>
    </article>

  </section>
<!--  <div class="row stats-banner">
    <img class="img img-responsive" src="assets/images/statsbanner-01.png" width="2000" height="450" />
    <div class="container">
      <h1 style="color: #ffffff;">Statistics</h1>
    </div>
  </div>-->
  <section class="white" style="padding: 0px 0px;">
    <article class="container enterprenuer-section" id="intor-section">
      <img class="img img-responsive" src="assets/images/map-01.png" width="2000" height="450" />
    </article>
  </section>



  <section class="white" style="padding: 30px 0px;">
    <article class="container enterprenuer-section" id="intor-section">
      <p>Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.</p>
      </ul>
    </article>
  </section>
  <section class="white" style="padding: 0px 0px;">
    <article class="container button-section" id="intor-section">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left" style="margin-bottom: 10px;">
          <img src="assets/images/watchstats-01.png"  />
          <div class="container">
            <h1 style="color: #ffffff;">12345</h1>
            <h2 style="color: #ffffff;">Successfull Projects</h2>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 10px;">
          <img src="assets/images/numberstats-01.png" />
          <div class="container">
            <h1 style="color: #ffffff;">12345</h1>
            <h2 style="color: #ffffff;">Funded</h2>
          </div>
        </div>
      </div>
    </article>
  </section>
<section class="white">
<h4 class="text-center" style="margin-bottom: 20px;">TOTAL FUNDING ROUNDS EACH YEAR</h4>
       <!-- css bar graph -->
    <article class="container button-section" id="intor-section">
      <div class="flot-chart">
          <div class="flot-chart-content" style="height: 300px;" id="flot-bar-chart"></div>
      </div>
    </article>
  </section>

<section class="white" style="padding: 0px 0px;">
  <article class="container vertical-bar" id="intor-section">

    <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
    aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete (success)
    </div>
    </div>

    <div class="progress">
      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
      aria-valuemin="0" aria-valuemax="100" style="width:50%">
        50% Complete (info)
      </div>
    </div>

      <div class="progress">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
        aria-valuemin="0" aria-valuemax="100" style="width:60%">
          60% Complete (warning)
        </div>
      </div>

      <div class="progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
        aria-valuemin="0" aria-valuemax="100" style="width:70%">
          70% Complete (danger)
        </div>
      </div>
    </article>
</section>

  
 <section class="white" style="padding: 30px 0px;">
    <article class="container bottom-text">
      <p>Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.Etiam porta sem malesuada mama rnolis euismod. Lorem osun.</p>
      </ul>
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
       var barOptions = {
        series: {
            bars: {
                show: true,
                barWidth: 43200000
            }
        },
        xaxis: {
            mode: "time",
            timeformat: "%m/%d",
            minTickSize: [1, "day"]
        },
        grid: {
            hoverable: true
        },
        legend: {
            show: false
        },
        tooltip: true,
        tooltipOpts: {
            content: "x: %x, y: %y"
        }
    };
    var barData = {
        label: "bar",
        data: [
            [1354521600000, 1000],
            [1355040000000, 2000],
            [1355223600000, 3000],
            [1355306400000, 4000],
            [1355487300000, 5000],
            [1355571900000, 6000]
        ]
    };
    $.plot($("#flot-bar-chart"), [barData], barOptions);
    });
</script>
</body>

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
</html>