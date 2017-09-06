<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'security.php';
	require_once 'classes/main_function.php';
	require_once 'classes/feedback_class.php';
	
	$feedback = new feedback;
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "Feedback";
        require_once 'incs/head.php';
    ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
        	require_once 'incs/menu.php';
		?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"> Feedback</h3>
                    </div>
                </div>
                <div class="row">
                	<div class="col-lg-12">
                    	<?php
                        	$feedback->select_feed();
						?>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php
   	require_once 'incs/footer.php';
   ?>

</body>

</html>
