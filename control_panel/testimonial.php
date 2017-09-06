<?php
	#DATABASE CONFIGURATION
	require_once 'config/config.php';
	require_once 'config/connection.php';
	#
	require_once 'security.php';
	#
	require_once 'classes/main_function.php';
	require_once 'classes/testimonial_class.php';
	
	$testimonial = new testimonial;
	$testimonial->new_testimonial();
	$testimonial->delete_testimonial();
	$testimonial->update_testimonial();
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "Testimonials";
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
			   if(isset($_GET['action']) && $_GET['action'] = 'insert') $testimonial->testimonial_form();
			   elseif(isset($_GET['update']) && $_GET['update'] !="" && is_numeric($_GET['update'])) $testimonial->testimonial_form($_GET['update']);
			   else
               	$testimonial->select_testimonial();
				unset($testimonial);
			   ?>
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
