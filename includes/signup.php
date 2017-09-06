    <article class="container">
      <div class="row">
        <div class="col-lg-2"></div>
          <div class="col-lg-8">

<div class="panel panel-primary">
<div class="panel panel-heading">
Sign Up here
</div>
<div class="panel panel-body">
<form id="signup-form" action="control_panel/classes/user.php" class="form-ui" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
                <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="First Name" name="firstname">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Last Name" name="lastname">
                </div>
                <div class="clear"></div>
              
                <div class="form-left form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="Email Address" name="email">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="text" value="" class="form-control" placeholder="User Name" name="nickname">
                </div>
                <div class="clear"></div>
              
                <div class="form-left form-group col-lg-6">
                  <input type="password" value="" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="form-right form-group col-lg-6">
                  <input type="password" value="" class="form-control" placeholder="Confirm Password" name="confrim">
                </div>
                <div class="clear"></div>
              <div class="form-group">
                <div class="col-lg-6">
                  <div class="g-recaptcha" data-sitekey="6LchYSwUAAAAAH8zJKgdwAFd05sMRM5f_TkpDvdN"></div>
                </div>
              </div>
              <div class="clear"></div>
              <div class="form-group">
              <div class="col-lg-3">
                <button type="submit" class="btn btn-primary">Register </button>
                  <input type="hidden" name="add" value="user" />
                </div>
                <div  class="col-lg-3  pull-right" style="padding-top:10px;">
                
                <a href="register.php?login"><span style="text-decoration:underline">Already a Member?</span></a>
             </div>
              </div>
            
             
                 
              <div class="clear"></div>
              
            </div>
            
            </form>

</div>

</div>
           
            
            
           
          </div>
               <div class="col-lg-2"></div> 
      </div>
    </article>
  <script>
        $(document).ready(function() {



// bootstrap validation start from here.
             $('#signup-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
           /* feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },*/
            fields: {
                firstname: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please enter your first name'
                        }
                    }
                },
                 lastname: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please enter your last name'
                        }
                    }
                },
                email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your email address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid email address'
                    }
                }
            },
            nickname: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please enter your nick name'
                        }
                    }
                },
                 password: {
                validators: {
                  stringLength: {
                            min: 6,
                            message: 'The password must be more than 5 and less than 30 characters long'
                        },
                    identical: {
                      //  field: 'confrim',
                       // message: 'Confirm your password below - type same password please'
                    }
                }
            },
            confrim: {
                validators: {
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
             },

             
                
                
                }
            })
          });
      </script>