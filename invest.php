<?php 
require_once 'control_panel/config/config.php';
require_once 'control_panel/config/connection.php';
include('control_panel/user_security.php'); 
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

<title>Investments | Crowd Durshal</title> 


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
      <div class="container"><h3>Contribute On Project</h3></div>
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
            <li><a href="invest.php">Investment</a></li>
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
      
      </div>
        <div class="title">
          <ul>
              <li data-link="social-media" class="current"><a href="#"><i class="fa fa-book"></i><span>Aggreement</span></a></li>
            <li data-link="basic-data" class=""><a href="#"><i class="fa fa-cc-paypal"></i><span>About you</span></a></li>
        
          <!--   <li data-link="add-perks" class=""><a href="#"><i class="fa fa-tags"></i><span>Add Perks</span></a></li>
            <li data-link="image-vidoe" class=""><a href="#"><i class="fa fa-file-image-o"></i><span>Add Images or Video</span></a></li> -->
          </ul>
        </div>
        <hr>
        <div class="start-content">
          <form id="investment-form" action="control_panel/classes/user.php" method="post" enctype="multipart/form-data">
            
            <div id="social-media" class="form-wizard active">
              <article class="container">
    <p>To help you fully understand the risks involved when investing in start-up companies, please take some time to read the following tutorial</p>
     <h4>Loss of investment</h4>
     <p align="justify">
     Most start-up businesses fail and therefore investing in these businesses may involve significant risk.
      In the event of a business failing you will be liable,
      <br> as a shareholder in a company,
       and it is likely that you may lose all, or part, or your investment.

If a business you invest in fails, neither the company you
<br> invest in nor Crowd Durshal will pay you back you investment. You should only invest an amount that you are willing to lose and should build a diversified
<br> portfolio to spread risk
     </p>
     <h4>Lack of liquidity</h4>
     <p>
     Liquidity is the ease with which you can sell your shares after you have purchased them. Buying shares in businesses pitching through Crowd Durshal cannot 
     be sold<br> easily as they are unlikely to be listed on a secondary trading market, such as AIM, Plus or the London Stock Exchange. <br>
     Even successful companies rarely list shares on such an exchange.

Without a public market to find a buyer for shares it may be more difficult to sell them for a cash return.
<br> Investment through Crowd Durshal should be viewed as a long term and illiquid investment.
     
     </p>
     
     <h4>Rarity of dividends</h4>
     <p>
     Dividends are payments made by a business to its shareholders from the company's profits. Most of the companies pitching on the Crowd Durshal website are start-ups 
     <br> or early stage companies, and these companies will rarely pay dividends to their investors. This means that you are unlikely to see a return on your investment until 
          <br>you are able to sell your shares.     <br>

Profits are typically re-invested into the business to fuel growth and build shareholder value. Businesses have no obligation to pay shareholder dividends.
     
     </p>
     <h4>Possibility of dilution</h4>
     <p>
     Any investment made through Crowd Durshal may be subject to dilution in the future. Dilution occurs when a company issues more shares and affects every existing 
   <br>  shareholder who does not buy any of the new shares being issued. As a result an existing
      shareholders proportionate shareholding of the company is reduced, or 'diluted'.<br>

For example, if Bill Gates owns 1,000 shares of Microsoft which represents 100% of the issued and outstanding shares and Microsoft issues 1,000 shares to Paul Allen,
<br> then Bill Gates' has experienced a percentage dilution in his ownership from 100% to 50%. Therefore Bill's proportionate shareholding is reduced.
     </p>
     <h4>The need for diversification</h4>
     <p>
     Diversification involves spreading your money across multiple investments to reduce risk. However, it will not lessen all types of risk.
     <br>

Diversification is an essential part of investing. Investors should only invest a proportion of their available investment funds via Crowd Durshal
<br>and should balance this with safer, more liquid investments.
     </p>
     
    </article>

              
              
              <div class="next-btn">
               <!-- <button type="button" class="btn btn-5 blue" data-link="basic-data" onClick="moveform(this,'')">Back</button>-->
                <button type="button" class="btn btn-4 blue" data-link="add-perks" onClick="moveform(this,'basic-data')">I Accept</button>
              </div>
            </div>
            
            <div id="basic-data" class="form-wizard">
 <div class="form-group col-lg-12">
                
                  <input type="text" class="form-control" placeholder="InvestMent Amount" name="amount" value="<?php echo $_POST['amount']; ?>">
                
               
                <div class="clear"></div>
              </div>



           	            
                <div class="form-left form-group col-lg-6">
                  <input type="text" value="<?php echo $_SESSION['firstname']; ?>" class="form-control" placeholder="First Name" name="fname">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="<?php echo $_SESSION['lastname']; ?>" class="form-control" placeholder="Last Name" name="lname">
                </div>
                <div class="clear"></div>

               <div class=" form-group col-lg-12">
            
                  <input type="text" value="<?php echo $_SESSION['email']; ?>" class="form-control" placeholder="Email Adress" name="email">
             
                <div class="clear"></div>
              </div>

               <div class="form-group col-lg-12">
            
                  <input type="text" value="" class="form-control" placeholder=" Your Address" name="address">
             
                <div class="clear"></div>
              </div>

                <div class="form-left form-group col-lg-6">
                <input type="text" value="" class="form-control" placeholder="Country" name="country">
                </div>
                <div class="form-right form-group col-lg-6">
                   <input type="text" value="" class="form-control" placeholder="City" name="city">
                </div>
                <div class="clear"></div>

                <div class="form-left form-group col-lg-6">
                  <input type="text" value="<?php echo $_SESSION['mobile']; ?>" class="form-control" placeholder="Cell No " name="cellno">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Phone No  " name="phoneno">
                </div>
                <div class="clear"></div>
            
           
   
              
              <div class="form-group col-lg-12">
                <textarea name="comments" class="form-control" placeholder="Comments About Investment"></textarea>
              </div>
                <div class="clear"></div>
                 <div class="form-group">
                 
              <div class="next-btn">
               <button type="button" class="btn btn-5 blue" data-link="basic-data" onClick="moveform(this,'social-media')">Back</button>
              <button type="submit" class="btn btn-4 blue" data-link="social-media">Contribute Now </button>

                                            <input type="hidden" name="invest" value="money" >
                                            <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>" >
                                              <input type="hidden" name="project" value="<?php echo $_POST['project']; ?>" >
              </div>
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
    
         $('#investment-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                fname: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply  first name'
                        }
                    }
                },
                 lname: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply  last name'
                        }
                    }
                },
                email: {
                        validators: {
                        notEmpty: {
                            message: 'Please supply your  Email'
                        },
                        emailAddress: {
                            message: 'Please supply a valid email address'
                        }
                    }
                    },
                address: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply Your address'
                        }
                    }
                },
                country: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply Your country'
                        }
                    }
                },
                 city: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your city'
                        }
                    }
                },
                 cellno: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        numeric: {
                                message: 'Please provide a vilade phone number.'
                        }
                    }
                },
                 phoneno: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        integer: {
                                message: 'Please provide a vilade phone number.'
                        }
                    }
                },
                 amount: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        integer: {
                            message: 'Please supply investment amount'
                        }
                    }
                }/*,
                 comment: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply investment comment'
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