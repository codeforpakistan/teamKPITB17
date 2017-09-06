<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Crowd Durshal HTML5 Template">
<meta name="description" content="Crowd Durshal is a HTML5 Responsive Crowdfunding Template">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Start Project | Crowd Durshal - Crowdfunding HTML5 Template</title> 


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
      <div class="container"><h3>Start Your Project</h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index-2.html">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li><a href="start.html">Start</a></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container">
      
      <!-- ************************ Form Area Start ************************ -->
      
      <div class="start-project">
        <div class="title">
          <ul>
            <li data-link="basic-data" class="current"><a href="#"><i class="fa fa-pagelines"></i><span>Baisc Information</span></a></li>
            <li data-link="social-media" class=""><a href="#"><i class="fa fa-link"></i><span>Social Media</span></a></li>
            <li data-link="add-perks" class=""><a href="#"><i class="fa fa-tags"></i><span>Add Perks</span></a></li>
            <li data-link="image-vidoe" class=""><a href="#"><i class="fa fa-file-image-o"></i><span>Add Images or Video</span></a></li>
          </ul>
        </div>
        <hr>
        <div class="start-content">
          <form action="http://html.stackthemes.net/Crowd Durshal-preview/start.html" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Project Title" name="title">
                </div>
                <div class="form-right">
                  <input type="text" value="" class="form-control" placeholder="Amount You Want To Raise" name="money">
                </div>
                <div class="clear"></div>
              </div>
            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Project Tagline" name="tagline">
                </div>
                <div class="form-right">
                  <select class="form-control arrow-down" name="category">
                    <option value="">Select A Category</option>
                    <option value="Animals">Animals</option>
                    <option value="Community">Community</option>
                    <option value="Education">Education</option>
                    <option value="Environment">Environment</option>
                    <option value="Food">Food</option>
                    <option value="Health">Health</option>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Deadline - Funding ends" name="date">
                </div>
                <div class="form-right">
                    <select class="form-control arrow-down" name="recipient">
                    <option value="">Select A Funds Recipient</option>
                    <option value="An Individual">An Individual</option>
                    <option value="A Business">A Business</option>
                    <option value="A Nonprofit">A Nonprofit</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <div class="form-left selectimage" id="imguploadbasic-1">
                  <input type="text" value="" class="form-control" placeholder="Project Image">
                  <button type="button" class="imageUploadBtn">Choose File</button>
                  <input type="file" name="basicimg[]" />
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <textarea name="description" class="form-control" placeholder="Project Description"></textarea>
              </div>
              
              <div class="next-btn"><button type="button" class="btn btn-4 blue" data-link="social-media" onClick="moveform(this,'social-media')">Next</button></div>
              
            </div>
            
            <div id="social-media" class="form-wizard">
              
              <div class="form-group">
                <div class="form-left">
                  <input type="url" value="" class="form-control" placeholder="Facebook Url" name="fb">
                </div>
                <div class="form-right">
                  <input type="url" value="" class="form-control" placeholder="Twitter Url" name="tw">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <div class="form-left">
                  <input type="url" value="" class="form-control" placeholder="Youtube Url" name="yt">
                </div>
                <div class="form-right">
                  <input type="url" value="" class="form-control" placeholder="Website Url" name="web">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 blue" data-link="basic-data" onClick="moveform(this,'basic-data')">Back</button>
                <button type="button" class="btn btn-4 blue" data-link="add-perks" onClick="moveform(this,'add-perks')">Next</button>
              </div>
            </div>
            
            <div id="add-perks" class="form-wizard">
              <div id="perk-elements">
                <div class="form-group">
                  <div class="form-left">
                    <input type="text" value="" class="form-control" placeholder="Perk Name" name="perk-title[]">
                  </div>
                  <div class="form-right">
                    <input type="text" value="" class="form-control" placeholder="Contribution Amount" name="price[]">
                  </div>
                  <div class="clear"></div>
                </div>
                
                <div class="form-group">
                  <div class="form-left">
                    <input type="text" value="" class="form-control" placeholder="Number Available" name="perk-title[]">
                  </div>
                  <div class="form-right">
                    <input type="text" value="" class="form-control" placeholder="Estimated Delivery Date" name="price[]">
                  </div>
                  <div class="clear"></div>
                </div>
              
                <div class="form-group">
                  <textarea name="perk-description[]" class="form-control" placeholder="Perk Description"></textarea>
                </div>
              </div>
              
              <div id="add-more-perks"></div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 green add-perk-btn" onClick="addperk()">Add An Other Perk</button>
                <button type="button" class="btn btn-5 blue" data-link="social-media" onClick="moveform(this,'social-media')">Back</button>
                <button type="button" class="btn btn-4 blue" data-link="image-vidoe" onClick="moveform(this,'image-vidoe')">Next</button>
                <div class="clear"></div>
              </div>
            </div>
            
            <div id="image-vidoe" class="form-wizard">
              <div class="form-group">
                <div class="select-gallery-type">
                  <ul>
                    <li data-galerytype="vid" class="active">Video</li>
                    <li data-galerytype="img">Images</li>
                  </ul>
                </div>
              </div>
              
              <div id="video-inputs" class="imgORvid">
                <div class="form-group">
                  <div class="form-left" style="width:100%;">
                    <input type="text" value="" class="form-control" placeholder="Youtube or Vimeo Link" name="title">
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              
              <div id="images-inputs" class="imgORvid">
                <div class="form-group">
                  <div id="image-field-cnt">
                    <div class="form-left selectimage" id="imgupload-1">
                      <input type="text" value="" class="form-control" placeholder="Upload Image">
                      <button type="button" class="imageUploadBtn">Choose File</button>
                      <input type="file" name="galleryimg[]" />
                    </div>
                  </div>
                  <div id="add-image-field-cnt"><input type="hidden" value="1" id="imgNumber" name="imgNumber" ></div>
                  <div class="clear"></div>
                  <button type="button" class="btn btn-5 green add-perk-btn add-imgbtn" onClick="addimage()">Add An Other Image</button>
                </div>
              </div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 blue" data-link="add-perks" onClick="moveform(this,'add-perks')">Back</button>
                <button type="submit" class="btn btn-4 blue">Submit</button>
              </div>
            </div>
            
          </form>
        </div>
      </div>
      
      <!-- ************************ Form Area End ************************ -->
      
    </article>
  </section>
  
  <!-- ************************ Footer ************************ -->
  
<?php include('includes/footer.php'); ?>
</div>

<!-- ************************ jQuery Scripts ************************ -->

<!-- jQuery (necessary for JavaScript plugins) -->
 <?php include('includes/js-links.php'); ?>

</body>

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
</html>