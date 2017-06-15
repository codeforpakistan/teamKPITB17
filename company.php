<?php 
require_once 'control_panel/config/config.php';
 require_once 'control_panel/config/connection.php';
include('control_panel/user_security.php'); 
$id = $_SESSION['userid'];
$sql = "SELECT usercompany.*,CONCAT(FirstName, ' ', LastName) as c_user, tblusers.* 
        FROM usercompany 
        INNER JOIN tblusers 
          ON  usercompany.UserID = tblusers.UserID where usercompany.UserID = $id";
$rows =mysqli_query($connect,$sql);


?><!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
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
      <div class="container"><h3>Add Your Company </h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index.php">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li><a href="company.php">Add Company</a></li>
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
      <div class="row">
      <div class="col-lg-12">
      
      <?php if(isset($_SESSION['msg'])){
		  echo $_SESSION['msg']; 
	  unset($_SESSION['msg']);
	  }
	  ?>
      
      </div>
                <div class="col-lg-12">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Companies Information
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                            <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Add New Company
                                            <span class="updown-cion"></span>
                                            </a>
                                           
                                        </h4>
                                          
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           
      <div class="title">
          <ul>
            <li data-link="basic-data" class="current"><a href="#"><i class="fa fa-bank"></i><span>Company Information</span></a></li>
          <!--   <li data-link="social-media" class=""><a href="#"><i class="fa fa-link"></i><span>Social Media</span></a></li>
            <li data-link="add-perks" class=""><a href="#"><i class="fa fa-tags"></i><span>Add Perks</span></a></li>
            <li data-link="image-vidoe" class=""><a href="#"><i class="fa fa-file-image-o"></i><span>Add Images or Video</span></a></li> -->
          </ul>
        </div>
        <hr>
        
        <div class="start-content">
          <form id="company-form" action="control_panel/classes/user.php" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
                <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="C o m p a n y   N a m e" name="cname">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="C o m p a n y   N T N" name="cntn">
                </div>
                <div class="clear"></div>

                <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="C o m p a n y   R e g i s t e r t i o n  K P I T B  /  P S E B " name="cregno">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="email" value="" class="form-control" placeholder="C o m p a n y   E m a i l " name="cemail">
                </div>
                <div class="clear"></div>

                <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="C o m p a n y   W e b s i t e " name="cwebsite">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="C o m p a n y  P h o n e  N o " name="cphone">
                </div>
                <div class="clear"></div>
            
           
              
              
              <div class="form-group col-lg-12">
                <textarea name="cdetail" class="form-control" placeholder="E x p l a i n  Y o u r  B u s s i n e s s"></textarea>
              </div>
                <div class="clear"></div>
                
                 <div class="form-group col-lg-12">
               
                <div class="form-left selectimage" id="imguploadbasic-1">
                  <input type="text" value="" class="form-control" name="teamphoto" placeholder="Upload Your Team Photo">
                  <button type="button" class="imageUploadBtn">Choose File</button>
                  <input type="file" name="teamphoto"/>
                </div>
                <div class="clear"></div>
              </div>
              
               <div class="form-group col-lg-12">
              
                <textarea name="teamdesc" class="form-control" placeholder="About Your Team "></textarea>
              </div>
                <div class="clear"></div>
                 <div class="form-group">
              <div class="next-btn"><button type="submit" class="btn btn-info" data-link="social-media">A d d  C o m p a n y </button>

                                            <input type="hidden" name="add" value="company" >
                                            <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>" >
              </div>
              </div>
              
            </div>
            
           <!--  <div id="social-media" class="form-wizard">
              
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
            </div> -->
            
          </form>
        </div>
      
      
                                           
                                        </div>
                                    </div>
                                </div>
                            
                            
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Your Companies</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        
                                          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>NTN</th>
                                                <th>Name</th>
                                                <th>Regno </th>
                                                <th>Email</th>
                                                <th>User</th>
                                                <th>Phone No </th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Verification</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php if (count($rows) > 0) {

                                            while($row=mysqli_fetch_array($rows)) {?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $row['c_ntn']; ?></td>
                                                <td><?php echo $row['c_name']; ?></td>
                                                <td><?php echo $row['c_regno']; ?></td>
                                                <td><?php echo $row['c_email']; ?></td>
                                                <td><?php echo $row['c_user']; ?></td>
                                                <td><?php echo $row['c_phone']; ?></td>
                                                <td><?php echo $row['c_date']; ?></td>
                                                <td><?php echo ($row['c_status']==1)?'<span class="label label-success">Active</span>': '<span class="label label-danger">Unactive</span>'; ?></td>
                                                <td><?php echo ($row['c_verification']==1)?'<span class="label label-success">Verified</span>': '<span class="label label-danger">Unverified</span>'; ?></td>
                                                <td>
                                                <?php echo ($row['c_status']==1)?'<a href="verify.php?cid='.$row['c_id'].'&&name='.$row['c_name'].'"><strong>Add New Project</strong></a>':
												 '<a href="verify.php?cid='.$row['c_id'].'&&name='.$row['c_name'].'"><strong>Resend Email</strong></a>'; ?>
                                                
                                                </td>

                                            </tr>
                                        <?php } 
                                        } ?>
                                        </tbody>
                                    </table>
          
      
        
        
      
      
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
<script>
    $(document).ready(function() {
           $('#company-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                Cntn: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply your company NTN'
                        }
                    }
                },
                 cname: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your Company Name'
                        }
                    }
                },
                cregno: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your PSEB/IT Board Regno'
                        }
                    }
                },

                cemail: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your Company Email'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            cwebsite: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your Website'
                        }
                    }
                },
            cphone: {
                    validators: {
                         stringLength: {
                            min: 2,
                            number: true

                        },
                        notEmpty: {
                            message: 'Please supply your Phone No'
                        },
                        numeric: {
                                message: 'Please provide a vilade phone number.'
                        }
                    }
                },
                c_date: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your date'
                        }
                    }
                }/*,
                 description: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your Your bussiness explaination'
                        }
                    }
                }*/
                
                
                }
            })
    });
</script>
</body>

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
</html>