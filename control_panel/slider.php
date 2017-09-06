<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';
	require_once 'classes/slider_class.php';
	
	$slider = new slider();
	$slider->new_slider();
	$slider->update_slider();
	$slider->delete_slider();
	
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "Slider";
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
				
					if(isset($_GET['action']) && $_GET['action'] = "insert") $slider->slider_form();
					elseif(isset($_GET['update']) && $_GET['update'] != "" && is_numeric($_GET['update'])) $slider->slider_form($_GET['update']);
					else 
                           // echo 'i m here now';
                	$slider->select_slider();
					unset($slider);
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
