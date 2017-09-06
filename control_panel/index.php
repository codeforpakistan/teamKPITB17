<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'classes/main_function.php';
	if(isset($_POST['admin']) && $_POST['admin'] == 'access')
		{
			$ad_username = mysqli_real_escape_string($connect, $_POST['ad_username']);
			$ad_password = mysqli_real_escape_string($connect, $_POST['ad_password']);
			$sql = "SELECT * FROM tbladmin where ad_username='".$ad_username."' AND ad_password='".$ad_password."'";
			$select = mysqli_query($connect, $sql);
			
			$num = mysqli_num_rows($select);
			
			if($num > 0)
				{
					$rec = mysqli_fetch_array($select);
					
					$_SESSION['ad_id'] = $rec['ad_id'];
					$_SESSION['ad_name'] = $rec['ad_username'];

					redirect("home.php");
				}
			else
				{
					$msg = "! Invalid Username or Password";
				}
		}
?>
<!DOCTYPE html>
<html lang="en">

	<?php
		$title = "Login";
        require_once 'incs/head.php';
    ?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" id="login-form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="ad_username" placeholder="Username"  type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="ad_password" type="password" value="">
                                </div>
                                
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
                                <input type="hidden" name="admin" value="access">
                            </fieldset>
                        </form>
                    </div>
                </div>
                <strong style="color: red;"><?php
                	if(isset($msg)) echo $msg;
				?></strong>
            </div>
        </div>
    </div>

     <?php
    require_once 'incs/footer.php';
   ?>

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
                ad_username: {
                    validators: {
                            stringLength: {
                            min: 2
                        },
                            notEmpty: {
                            message: 'User name can not be empty'
                        }
                    }
                },
                ad_password: {
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

</body>

</html>
