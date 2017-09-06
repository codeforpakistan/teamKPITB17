<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';

    if ($_POST) {
        extract($_POST);

        $query = new database();
        $id = $_SESSION['ad_id'];

         $sql = "select * from tbladmin where ad_id = $id && ad_password = '$current_password'";
         $row = $query->select_record($sql); 

        if (count($row) > 0) {
            if ($ad_password == $confirm_password) {
                $sql = "update tbladmin set ad_password = '$ad_password' where ad_id = $id";
                $fields = array('ad_password');
                $where = "ad_id = $id";
                $sql = $query->update_record('tbladmin', $fields, $where);
                if (mysqli_query($connect, $sql)) {
                    $_SESSION['success'] = "Password changed successfully.";
                } else {
                    $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
                }
            } else {
                $_SESSION['error'] = "Make sure your confirm password is correct.";
            }
            
            
        } else {
            $_SESSION['error'] = "Make sure your current password is correct.";
        }

    }
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
        $title = "List Projects";
        require_once 'incs/head.php';
    ?>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php
            require_once 'incs/menu.php';
        ?>
        <div id="page-wrapper">
             <?php
                         
                echo_message();

            ?>
                 <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Change Password</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
    <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password
                    </div>
                                <!-- /.panel-heading -->
    <div class="panel-body">
        <div class='col-sm-6 col-md-offset-3'>
          <form id="change-password-form" accept-charset="UTF-8" action="" class="require-validation" data-cc-on-file="false"   action="" method="post">
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Current password</label>
                <input class='form-control' name="current_password" size='4' type='password'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>New password</label>
                <input autocomplete='off' name="ad_password" class='form-control card-number' size='20' type='password'>
              </div>
            </div>
             <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Repeate password</label>
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

    <?php
   	require_once 'incs/footer.php';
   ?>
<script>
    $(document).ready(function() {
        $('.deleteCompany').on('click', function() {
            if (confirm('Are you sure to delete this project?')) 
                return true;
            else
                return false;
        });
        $('#change-password-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                 current_password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide your current password'
                    }
                }
            },
                ad_password: {
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
                        field: 'ad_password',
                        message: 'The password and its confirm are not the same'
                    }
                }
             },
                    
                
                }
            })
    });
</script>
</body>

</html>
