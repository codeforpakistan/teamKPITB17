<?php 
require_once 'control_panel/config/config.php';
require_once 'control_panel/config/connection.php';
include('control_panel/user_security.php'); 
if(!isset($_SESSION['comp_id']) || $_SESSION['comp_id'] == ""){
	header('location:company.php');
	exit();
	}

?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Crowd Durshal HTML5 Template">
<meta name="description" content="Crowd Durshal is a HTML5 Responsive Crowdfunding Template">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Start Project | Crowd Durshal </title> 


<!-- ************************ CSS Files ************************ -->

<!-- Bootstrap CSS -->
<?php include('includes/links.php'); ?>
<link type="text/css" rel="stylesheet" href="assets/css/arrow.css">
</head>

<body>
<div class="wrapper"> 
  <!-- ************************ Header ************************ -->
  <?php include('includes/header.php'); ?>
  
  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container"><h1 style="padding-top:120px;">Start Your Project</h1></div>
       <div class=" inner-banner-arrow arrow bounce">

                     </div>
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
            <li><a href="company.php">Company</a></li>
             <li class="fa fa-angle-right"></li>
            <li><a href="#">Pitch Idea</a></li>
            <li><?php if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
										echo ' Email Verified';
										unset($_SESSION['msg']);
										}
                    // get user record.
                    $userID = $_SESSION['userid'];
                    $result = mysqli_query($connect, "select * from tblusers where UserID=$userID limit 1");
                    $row = mysqli_fetch_assoc($result);
                     ?></li>
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
    
     <div class="col-lg-4"></div>
       <div class="col-lg-12 text-center"><?php if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
										} ?>
                                        </div>
                                        <div class="col-lg-4"></div>
                                       
      </div>
        <div class="title">
          <ul>
            <li data-link="basic-data" class="current"><a href="#"><i class="fa fa-pagelines"></i><span>Pitch Idea</span></a></li>
           <!-- <li data-link="social-media" class=""><a href="#"><i class="fa fa-link"></i><span> Add Perks </span></a></li>-->
            <li data-link="social-media" class=""><a href="#"><i class="fa fa-tags"></i><span>About You</span></a></li>
          
          </ul>
        </div>
        <hr>
        <div class="start-content">
          <form id="project-form" action="control_panel/classes/user.php" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
                <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Title of Your Project" name="ptitle" required>
                </div>
                <div class="form-right form-group col-lg-6">
                  <select class="form-control arrow-down" name="pcategory">
                    <!-- <option value="">Select A Category</option> -->
                            
                      <?php $category=mysqli_query($connect,"Select * from tblcategory where cat_status ='1' order by cat_id desc"); ?>
                       <?php while($record=mysqli_fetch_assoc($category))
                                                   {

                                                    echo ' <option value="'.$record['cat_id'].'">'.$record['cat_name'].'</option>';

                                                   }

                                                      ?>  
                  </select>
                </div>
                
                <div class="clear"></div>
            
                <div class="form-left form-group col-lg-6">
                <select name="pduration"  class="form-control">
                <option value="">Please Select Days for Funding</option>
                <option value="30">30 Days</option>
                <option value="60">60 Days</option>
                <option value="90" selected >90 Days</option>
                </select>
                 
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Amount You Want To Raise in Rupees" name="pamount" required pattern="[0-9]">
                </div>
                <div class="clear"></div>
            
            
             
              
              <div class="form-group col-lg-12">
                <div class="form-left selectimage" id="imguploadbasic-1">
                  <input type="text" value="" class="form-control" name="pphoto" placeholder="Project Image with size 800*500" required>
                  <button type="button" class="imageUploadBtn">Choose File</button>
                  <input type="file" name="pphoto"/>
                </div>
                <div class="clear"></div>
              </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Your City " name="pcity" required>
                </div>
              <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Embed code of your video " name="plink" required>
                </div>
                  <div class="clear"></div>
                  
                   <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Facebook Page of Project " name="pfb">
                </div>
              <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Twitter Profile of Project" name="ptwitter">
                </div>
                  <div class="clear"></div>
                   <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Youtube Channel Link" name="pyoutube">
                </div>
              <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Project Website Link" name="pwebsite">
                </div>
                  <div class="clear"></div>
              <div class="form-group col-lg-12">
               <input type="text" value="" class="form-control" placeholder="Project Description max 100 Charcters" name="pdesc" required>
               
              </div>
             <!--  <div class="form-group col-lg-12">
               <textarea name="pstory" placeholder="Description" id="desc" class="dyname-textarea" cols="45" rows="5"></textarea>
                
              </div> -->

              <div class="form-group col-lg-12">
               <input type="hidden" name="pstory" id="pstory" />
              <div class="editable" id="title"></div>

              </div>
              
              <div class="next-btn"><button type="button" class="btn btn-4 blue btn-next" data-link="social-media" onClick="moveform(this,'social-media')">Next</button></div> 
             
            </div>
            
            <!--<div id="add-perks" class="form-wizard">
              <div id="perk-elements">
                  <div class="form-left form-group col-lg-6">
                    <input type="text" value="" class="form-control" placeholder="Perk Name" name="prek_name[]">
                  </div>
                  <div class="form-right form-group col-lg-6">
                    <input type="text" value="" class="form-control" placeholder="Contribution Amount" name="contribute_amount[]">
                  </div>
                  <div class="clear"></div>
                
                  <div class="form-left form-group col-lg-6">
                    <input type="text" value="" class="form-control" placeholder="Number Available" name="number_available[]">
                  </div>
                  <div class="form-right  form-group col-lg-6">
                    <div class="input-group date" data-provide="datepicker">
                      <input type="text" data-date-format="YYYY-MM-DD" value="" class="form-control" placeholder="Estimated Delivery Date" name="estimate_delivery_date[]">
                      <span class="input-group-addon">
                                                          <span class="glyphicon glyphicon-calendar"></span>
                                                          </span>
                    </div>
                  </div>
                  <div class="clear"></div>
              
        <div class="form-group  form-group col-lg-12">
                  <textarea name="description[]" class="form-control" placeholder="Perk Description"></textarea>
                </div>
              </div>

              
              <div id="add-more-perks"></div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 green add-perk-btn" onClick="addperk()">Add an other perk</button> <button type="button" class="btn btn-5 pull-left red remove-perk-btn" >Remove this perk</button>
                <button type="button" class="btn btn-5 blue" data-link="social-media" onClick="moveform(this,'basic-data')">Back</button>
                <button type="button" class="btn btn-4 blue btn-next" data-link="image-vidoe" onClick="moveform(this,'social-media')">Next</button>
                <div class="clear"></div>
              </div>
            </div>-->
            
            <div id="social-media" class="form-wizard">
              
                <div class="form-left form-group col-lg-6">
                  <input type="text"  class="form-control" placeholder="First Name" name="fname" value="<?php echo $row['FirstName']; ?>">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $row['LastName']; ?>">
                </div>
                <div class="clear"></div>
                <div class="form-left form-group col-lg-6">
                 
                  <div class='input-group date'  data-provide="datepicker">
                                                     <input type="text" data-date-format="YYYY-MM-DD" value="" class="form-control" placeholder="Date Of Birth" name="dob">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                </div>
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" class="form-control" placeholder="Phone No " name="phone" value="<?php echo @$row['Phone']; ?>">
                </div>
                <div class="clear"></div>
              
                <div class="form-left form-group col-lg-6">
                  <input type="url" value="" class="form-control" placeholder="Facebook Url" name="fb">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="url" value="" class="form-control" placeholder="Lnkdin Url" name="lnkdin">
                </div>
                
                <div class="form-group col-lg-12">
                  <div id="image-field-cnt">
                    <div class="form-left selectimage" id="imgupload-1">
                    <img id="pro-image" style="height: 100px;" src="control_panel/uploads/profile/<?php echo $row['img']; ?>" width="100" />
                      <input style="width: 88%; height: 100px; float: right;" type="text" value="" name="userphoto" class="form-control" placeholder="Upload Image">
                      <button type="button" style="float:right;" class="imageUploadBtn">Choose File</button>
                      <input id="new-image" type="file" name="userphoto" />
                    </div>
                  </div>
                  
                </div>
                <div class="clear"></div>
                
              <div class="next-btn">
                 <button type="button" class="btn btn-5 blue" data-link="social-media" onClick="moveform(this,'basic-data')">Back</button>
              <input type="submit" class="btn btn-4 blue" value="Post Your Project" id="add">
              <input type="hidden" name="add" value="project" >
                                            <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>" >
                                             <input type="hidden" name="cid" value="<?php echo $_SESSION['comp_id']; ?>" >
               
              </div>
            </div>
            
          
          
          
      
            
            <div id="image-vidoe" class="form-wizard">
            
             
                
              
              
              <div class="next-btn">
               
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
 <script>


  $(document).ready(function() {
      var editor = new MediumEditor('.editable', {
          placeholder: {
              /* This example includes the default options for placeholder,
                 if nothing is passed this is what it used */
              text: 'About Your Project',
              hideOnClick: false
          }
      });
      $('#add').on('click', function() {
          var text = editor.serialize();
        
          $('#pstory').val(text['title'].value);

        })

         $('#project-form').bootstrapValidator({
            // To use feedback icons,bootstrapValidator ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
              ptitle: {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            notEmpty: {
                            message: 'Please enter your project title'
                        }
                    }
                },
                pcategory: {
                    validators: {
                            notEmpty: {
                            message: 'Please enter your project category'
                        }
                    }
                },
                 pamount: {
                    validators: {
                         stringLength: {
                            min: 2
                        },
                        integer: {
                            message: 'Please enter your project amount'
                        }
                    }
                },
                pduration: {
                    validators: {
                         stringLength: {
                            min: 2
                        },
                        integer: {
                            message: 'Please enter your project duration'
                        }
                    }
                },
                pcity: {
                    validators: {
                         stringLength: {
                            min: 2
                        },
                        notEmpty: {
                            message: 'Please enter your project location'
                        }
                    }
                },
                pdesc: {
                    validators: {
                         stringLength: {
                            min: 2
                        },
                        notEmpty: {
                            message: 'Please enter your project description'
                        }
                    }
                },
                fname: {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            notEmpty: {
                            message: 'Please enter your first name'
                        }
                    }
                },
                lname: {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            notEmpty: {
                            message: 'Please enter your last name'
                        }
                    }
                },
                dob: {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            notEmpty: {
                            message: 'Please enter your date of birth'
                        }
                    }
                },
                phone: {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            numeric: {
                            message: 'Please enter your phone No '
                        }
                    }
                },
                'prek_name[]': {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            notEmpty: {
                            message: 'Please enter your prek name'
                        }
                    }
                },
                'contribute_amount[]': {
                    validators: {
                            stringLength: {
                            min: 1
                        },
                            notEmpty: {
                            message: 'Please enter contribute amount'
                        }
                    }
                },
                'number_available[]': {
                    validators: {
                            stringLength: {
                            min: 1
                        },
                            notEmpty: {
                            message: 'Please enter availability'
                        }
                    }
                },
                'estimate_delivery_date[]': {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            notEmpty: {
                            message: 'Please enter your date of birth'
                        }
                    }
                }
                
            }
                
        });
    $('.btn-next').on('click', function() {
       //$('#project-form').trigger('submit');
    })
    $('.remove-perk-btn').on('click', function() {
      var count = $('.moreperks').length;
       if (count < 1) {
        $('#perk-elements').css('display', 'none');
       } else {
          $('.moreperks').last().remove();
       }
      
    })
    var inp = document.getElementById('new-image');
    inp.addEventListener('change', function(e){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(){
            document.getElementById('pro-image').src = this.result;
            };
        reader.readAsDataURL(file);
        },false);

 
    });
</script>

</body>

<!-- Mirrored from html.stackthemes.net/Crowd Durshal-preview/start.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 07:16:54 GMT -->
</html>