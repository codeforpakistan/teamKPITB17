<?php 
require_once 'control_panel/config/config.php';
 require_once 'control_panel/config/connection.php';
 $single_project=mysqli_query($connect,"SELECT * FROM `tblproject` inner join usercompany on tblproject.c_id= usercompany.c_id where p_id ='".$_GET['project']."'");
 $single_record=mysqli_fetch_array($single_project);
 ////////////////////// comment///////////
 $comment=mysqli_query($connect, "SELECT *
FROM `tblcomments`
INNER JOIN tblusers ON tblcomments.UserID = tblusers.UserID where tblcomments.p_id=".$_GET['project']."");
$num=mysqli_num_rows($comment);
  ////////////////////// comment///////////
   

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Crowd Durshal">
<meta name="description" content="">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Projects Singal | Crowd Durshal</title> 

<!-- ************************ CSS Files ************************ -->

<!-- Bootstrap CSS -->
<?php include('includes/links.php'); ?>
<style>
  .reply {
    display: none;
  }
</style>

</head>

<body>
<div class="wrapper"> 
  <!-- ************************ Header ************************ -->
<?php include('includes/header.php'); ?>
  
  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom" style="background: url(control_panel/uploads/project/<?php echo $single_record['p_photo']; ?>) 0% 0% fixed; background-size:100% !important;">
    <article>
      <div class="container"><h3 style="padding-top:100px"><?php echo $single_record['p_title']; ?></h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index.php">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li><a href="projects.php">Projects</a></li>
            <li class="fa fa-angle-right"></li>
            <li><?php echo $single_record['p_title']; ?></li>
          </ul>
        </div>
        <div class="col-lg-6 align-right sub-menu social">
          <ul>
            <li><i class="fa fa-map-marker"></i> &nbsp; <?php echo $single_record['p_location']; ?> &nbsp;&nbsp;</li>
            
            <li>
          
            &nbsp;&nbsp;<a href="#"  data-toggle="tooltip" data-placement="top" title="<?php echo $single_record['c_detail']; ?>"><span class="icon-community"></span> &nbsp; <?php echo $single_record['c_name']; ?></a></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container project-single">
      <div class="row about-project">
        
        <!-- ************************ Left Side Area ************************ -->
        
        <div class="col-lg-8">
          
          <!-- ************************ Project Gallery ************************ -->
        
          <!--<div class="pslider">
            <div class="slide"><img src="control_panel/uploads/project/<?php // echo $single_record['p_photo']; ?>" alt="img" /></div>
            <div class="slide"><img src="control_panel/uploads/project/<?php //echo $single_record['p_photo']; ?>" alt="img" /></div>
          </div>-->
          
          <div class="pcontent">
            <!-- ************************ Tabs Start ************************ -->
            <div class="tabpanel">
           
              <ul class="nav nav-tabs pstabs">
                <li class="active"><a href="#about-project">About the project</a></li>
               <!-- <li><a href="#costs">Costs</a></li>
                <li><a href="#faqs">FAQ's</a></li>-->
                <li><a href="#news">Team</a></li>
                <li><a href="#comments">Comments<?php if($num > 0){ echo '<i>'.$num.'</i>'; } ?></a></li>
              </ul>
              
              <div class="tab-content">
                
                <!-- ************************ Details About Project ************************ -->
                
                <div class="tab-pane active" id="about-project">
                 <?php if($single_record['p_link'] != ''){ 
                echo '  <div class="videoWrapper">
                "'.$single_record['p_link'].'"
                   
                  </div>';
                  } ?>
                  <h5><?php echo $single_record['p_desc']; ?></h5>
                  <p><?php echo $single_record['p_story']; ?>.</p>

                  
             
                  
                </div>
                
                <!-- ************************ Costs Chart ************************ -->
                
               
                <!-- ************************ Project FAQs ************************ -->
                                
                <!-- ************************ Project News ************************ -->
                
                
                <div class="tab-pane active" id="news">
                  <h5>Meet Our Team </h5>
                 
                  <p><?php echo $single_record['c_teamdesc']; ?></p>
         
             <figure>
                    <img src="control_panel/uploads/team/<?php echo $single_record['c_teamphoto']; ?>"  alt="Our Team">
                  </figure>
                  
                </div>
                
                <!-- ************************ Project Comments ************************ -->
                
                <div class="tab-pane" id="comments">
                  <h5><i class="fa fa-comments"></i>Comments</h5>
                  
                  <div class="detailBox">
                    <div class="actionBox">
                      <ul class="commentList">
                      <li></li>
                      <?php 

while($comment_rec=mysqli_fetch_array($comment)){
             ?>
                        <li>
                          <div class="commenterImage"><img  src="<?php echo 'control_panel/uploads/profile/'.$comment_rec['img']; ?>" alt="Funder" /></div>
                          <div class="commentText">
                           <p><strong> <?php echo $comment_rec['cm_comment']; ?></strong></p> <span class="date sub-text"><?php echo $comment_rec['cm_date']; ?></span>
           
                          </div>
                          <ul class="commentList">
                          <span class="view-replies"><a href="#/"><i class="fa fa-reply" aria-hidden="true"></i> View replies</a> </span>
                          <?php
               $reply=mysqli_query($connect, "SELECT *
FROM `tblreply`
INNER JOIN tblusers ON tblreply.UserID = tblusers.UserID where tblreply.cm_id ='".$comment_rec['cm_id']."'");
while($rep_rec=mysqli_fetch_array($reply)){ 
               ?>
                           <li id="reply"></li>

                          <li class="reply">
                          <div class="commenterImage" style="margin-left:30px;"><img  src="<?php echo 'control_panel/uploads/profile/'.$rep_rec['img']; ?>" alt="Funder" /></div>
                          <div class="commentText">
                            <p class=""><?php echo $rep_rec['rep_reply']; ?></p> <span class="date sub-text"><?php echo $rep_rec['re_date']; ?></span>
                          </div>
                           </li>
                           <?php  } ?>
                            <li>
                      
                         <?php if(isset($_SESSION['userid']) && $_SESSION['userid'] != '') { ?>
                       <form method="post" action="javascript:;" class="replyform"  class="form-inline">
                       <div class="form-group">
                          <input class="form-control replyform-input" type="text" placeholder="Reply"  name="reply"/>
                          <input type="hidden" name="add" value="reply" />
                          <input type="hidden" name="comment" value="<?php echo $comment_rec['cm_id']; ?>">
                           <input type="hidden" name="project" value="<?php echo $comment_rec['p_id']; ?>">
                                                 </div>
                      </form>
                       <?php } ?>
                        </li>
                          </ul>
                        </li>
                       
                        <?php } ?>
                      
                      </ul>
                      <?php if(isset($_SESSION['userid']) && $_SESSION['userid'] != '') { ?>
                      <form method="post" action="javascript:;" id="myform" onSubmit="insert();" class="form-inline">
                    
                       <!-- <div class="form-group">
                          <input class="form-control" type="text" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Your Email" />
                        </div>-->
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Your Comments" name="comment"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-5 blue">Add Comment</button>
                          <input type="hidden" name="add" value="comment" />
                          <input type="hidden" name="project" value="<?php echo $_GET['project']; ?>">
                         <input type="hidden" name="user" value="<?php echo $_SESSION['userid']; ?>" >
                                                 </div>
                      </form>
                      <?php } ?>
                    </div>
                  </div>
                    
                </div>
                
                                
              </div>
            </div>
            <!-- Tabs End -->
          </div>
        </div>
        
        <!-- ************************ Right Side Area ************************ -->
        
        <div class="col-lg-4">
          <div class="sidebar">
            
            <!-- Project Progress -->
            <?php $bakers=mysqli_query($connect,"select sum(invest_amount) as funded, count(UserID) as bakers from  tblinvestments where p_id='".$single_record['p_id']."' and invest_status = '1'");
      $num=mysqli_num_rows($bakers);
      
      $bakers_record=mysqli_fetch_array($bakers);
    $percent=$bakers_record['funded'] / $single_record['p_amount'] * 100 ;
       ?>
            <div class="sidebar-item">
              <div class="project-progress">
                <div class="popular-data data-single">
               
                 <img src="control_panel/uploads/profile/<?php echo $single_record['p_profile']; ?>" alt="Funder" />
                  <div class="pie_progress" role="progressbar" data-goal="<?php echo $percent; ?>"  data-barcolor="#ef6342" data-barsize="7.1">
                    <div class="pie_progress__number">0%</div>
                    <div class="pie_progress__label">Completed</div>
                  </div>
                </div>
                <div class="popular-details">
                  <ul>
                    <li class="last"><strong>Rs:<?php 
          if($bakers_record['funded'] == 0)
          {
          $funded = 0;  
          }
          else{
            $funded=$bakers_record['funded'];
            }
          echo $funded; ?></strong> Funded</li>
                    <li><h4><?php echo $bakers_record['bakers'];?></h4> Backers</li>
                    <?php 
          
          $date = strtotime($single_record['p_date']);
                     $remaining = $date - time();
                     $days_remaining = floor($remaining / 86400);
                     $hours_remaining = floor(($remaining % 86400) / 3600);
                      $days= $days_remaining + $single_record['p_duration'] ;

          
          
           ?>
                    <li><strong><?php echo $days; ?></strong> Days Left</li>
                  
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            
            <!-- We Need Volunteers -->
            
            <div class="sidebar-item">
              <div class="w-title"><h4>We Need Rs: <?php 
			  
			  $price = $single_record['p_amount'];

$price_text = (string)$price; // convert into a string
$arr = str_split($price_text, "3"); // break string in 3 character sets

$price_new_text = implode(",", $arr);  // implode array with comma


			  echo $price_new_text; ?> Money for !</h4></div>
              <div style="padding:15px;">
                
                <div class="list-info">
                  <p><?php echo $single_record['p_fname'].'&nbsp;'. $single_record['p_lastname']; ?> <span><a href="<?php echo $single_record['p_lnkdin']; ?>">Linkedin Profile</a></span></p>
                </div>
                <?php if(isset($_SESSION['userid'])) {?>
                <div class="side-box">
               
                   
                    <div style="text-align:center;">
                       <a href="invest.php?project=<?php echo $single_record['p_id']; ?>" class="btn btn-3 green" style="margin:10px 0px 5px 0px;">Back this Project</a>
                 
                    </div>
          
                </div>
                <?php }
        else{
          $_SESSION['project'] = $single_record['p_id'];
          ?>
                
                 <div style="text-align:center;">
                 <a href="register.php?login" class="btn btn-3 green" style="margin:10px 0px 5px 0px;">Back this Project</a>
                 </div>
                 <?php } ?>
              </div>
            </div>
            
            <div class="sidebar-item">
              <div class="w-title">Find This Project On</div>
              <div class="find-project">
                <ul>
				<?php if($single_record['p_facebook'] != ''){ ?>
                  <li><a target="_blank" href="<?php  echo $single_record['p_facebook']; ?>" class="fb transition-all" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <?php } ?>
                  
                  <?php if($single_record['p_twitter'] != ''){ ?>
 <li><a target="_blank" href="<?php echo $single_record['p_twitter']; ?>" class="tw transition-all" title="Twitter"><i class="fa fa-twitter"></i></a></li>             
 
     <?php } ?>
     
      <?php if($single_record['p_youtube'] != ''){ ?>
                  <li><a target="_blank" href="<?php echo $single_record['p_youtube']; ?>" class="yt transition-all" title="Youtube"><i class="fa fa-youtube"></i></a></li>
 
     <?php } ?>
      <?php if($single_record['p_website'] != ''){ ?>
                  <li><a target="_blank" href="<?php echo  $single_record['p_website']; ?>" class="wb transition-all" title="Website"><i class="fa fa-link"></i></a></li>
 
     <?php } ?>
     
     
                </ul>
              </div>
            </div>
            
          </div>
        </div> 
               
      </div>
    </article>
  </section>
  
  <!-- ************************ Send your idea ************************ -->
  
  
  
  <!-- ************************ Footer ************************ -->
  
 <?php include('includes/footer.php'); ?>
</div>

<!-- ************************ jQuery Scripts ************************ -->

<!--  jQuery (necessary for JavaScript plugins) -->
 <?php include('includes/js-links.php'); ?>
 
 <script type="text/javascript">
function insert()
{
  var form_data =$('#myform').serialize();
  $.ajax({
    url: 'control_panel/classes/comments.php',
    method : "post",
    data: form_data,
    
    success: function (data){
      
      $('#msg').html(data)
      $('.commentList').find('li').last().append(data);
      $('#myform')['0'].reset();
      $('#myform').find('textarea').focus();
        },
      error:function(){
          alert('sorry error occour');
              },
      
              
    
    });
    }
    
    $(document).ready(function() {
      $('.replyform-input').on('change', function() {
        var $this = $(this);
        var form_data = $(this).parents('form').serialize();
        $.ajax({
          url: 'control_panel/classes/comments.php',
          method : "post",
          data: form_data,
          
          success: function (data){
            var parent = $this.parents('form').parent();
            parent.prepend(data);
          $('.replyform-input').val('');
          $this.focus();
              },
            error:function(){
                alert('sorry error occour');
                    },
            
                    });
      });
      $('.view-replies').click(function() {
        $(this).parent('.commentList').find('.reply').css('display', 'list-item');
      });
    });

    </script>

</body>

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/project-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
</html>