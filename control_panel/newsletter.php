<?php
#DATABASE CONFIGURATION
	require_once 'config/config.php';
	require_once 'config/connection.php';
	#
	require_once 'security.php';
	#
	require_once 'classes/main_function.php';
	require_once 'classes/newsletter_class.php';
	
	$newsletter = new newsletter;
	$newsletter->delete_newsletter();
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "Newsletter";
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
            	<br>
                <?php
					
					echo_message();
                	$newsletter->select_newsletter();
				?>
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
