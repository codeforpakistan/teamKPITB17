 <section class="gray">
    <article class="container">
      <div class="row">
        <div class="col-lg-2"></div>
          <div class="col-lg-8">

            <h3>Sign Up here</h3>
            <p>Lorem ipsum dolor sit amet </p>
            
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
                  <input type="text" value="" class="form-control" placeholder="Confirm Password" name="confrim">
                </div>
                <div class="clear"></div>
              
              <div class=" form-group col-lg-12">
                <button type="submit" class="btn btn-4 blue default">Register </button>
                  <input type="hidden" name="add" value="user" />
                  
              </div>
              <div class="clear"></div>
                <div class="form-group">
               <a href="register.php?login">Already a Member</a>
                  
              </div>
              <div class="clear"></div>
              
            </div>
            
            </form>
           
          </div>
               <div class="col-lg-2"></div> 
      </div>
    </article>
  </section>
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
                            message: 'Please supply your first name'
                        }
                    }
                },
                 lastname: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your last name'
                        }
                    }
                },
                email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            nickname: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your nick name'
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
                        field: 'confrim',
                        message: 'Confirm your password below - type same password please'
                    }
                }
            },
            confrim: {
                validators: {
                  stringLength: {
                            min: 6,
                            message: 'The confirm password must be more than 5 and less than 30 characters long'
                        },
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