 <section class="gray">
    <article class="container contactpage">
      <div class="row">
      <div class="col-lg-4"></div>
       <div class="col-lg-4"><?php if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
										} ?>
                                        </div>
                                        <div class="col-lg-4"></div>
         <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <h3>login here</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore. </p>
            
            <form id="login-form" action="control_panel/classes/user.php" class="form-ui" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
                        
              <div class="form-group">
               
                  <input type="email" value="" class="form-control" placeholder="Email" name="email">
              
              </div>
              <div class="form-group">
               
                  <input type="password" value="" class="form-control" placeholder="Password" name="password">
               
                <div class="clear"></div>
              </div>
          
              <div class="form-group">
                <button type="submit" class="btn btn-4 blue default">Submit</button>
                <input type="hidden" name="log" value="in" />
              </div>
              
            </div>
            
            </form>
          </div>
                <div class="col-lg-2"></div>
      </div>
    </article>
  </section>
  <script>
    $(document).ready(function() {
                   $('#login-form').bootstrapValidator({

            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
                password: {
                    validators: {
                            notEmpty: {
                            message: 'Password can not be empty'
                        }
                    }
                }
                
                
                }
            });
    })
  </script>