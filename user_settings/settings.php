<?php 
$id = $_SESSION['userid'];
$sql = "SELECT tblproject.*, CONCAT(FirstName, ' ', LastName) as c_user, tblcategory.*, usercompany.*, tblusers.* 
        FROM tblproject 
        INNER JOIN tblcategory 
          ON  tblproject.cat_id = tblcategory.cat_id
        INNER JOIN usercompany
        ON tblproject.c_id = usercompany.c_id
        INNER JOIN tblusers
        ON tblproject.UserID = tblusers.UserID where tblproject.UserID = $id";
$rows = @$query->select_record($sql);
?>
<style>
  .card {
    margin: 10px;
  }
</style>
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password
                    </div>
                                <!-- /.panel-heading -->
    <div class="panel-body">
        <div class='col-sm-6 col-md-offset-3'>
          <form id="change-password-form" accept-charset="UTF-8" action="userUpdate.php?tabe=changepassword" class="require-validation" data-cc-on-file="false" method="post">
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Current password</label>
                <input class='form-control' name="current_password" size='4' type='password'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>New password</label>
                <input autocomplete='off' name="Password" class='form-control card-number' size='20' type='password'>
              </div>
            </div>
             <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Repeat password</label>
                <input autocomplete='off' name="confirm_password" class='form-control' size='20' type='password'>
              </div>
            </div>    
           
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit'>Change password</button>                
              </div>
            </div>
          </form>
        </div>
    </div>
</div>

        </div><!-- /.wrapper -->
</div><!-- /.row -->
      <script type="text/javascript">
      $(document).ready(function() {
                $('#change-password-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
           
            fields: {
                 current_password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide your current password'
                    }
                }
            },
                Password: {
                validators: {
                    identical: {
                        field: 'confirm_password',
                        message: 'Confirm your password below - type same password please'
                    }
                }
            },
            confirm_password: {
                validators: {
                    identical: {
                        field: 'Password',
                        message: 'The password and its confirm are not the same'
                    }
                }
             },
                    
                
                }
            })

		      });
      </script>