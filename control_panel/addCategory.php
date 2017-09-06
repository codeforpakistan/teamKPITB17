<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';


$query = new database();
if ($_POST) {
        $fields = array('cat_name', 'cat_status');
        $sql = $query->insert_record('tblcategory', $fields);

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record created successfully";
        } else {
            $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
        }
        redirect('listCategories.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "Add Category";
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
                            <h1 class="page-header">Add Category</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add Category
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form id="category-form" role="form" action="" method="post">
                                    <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Category Name</label>
                                                <input class="form-control" name="cat_name">
                                            </div>
                                            
                                            <div class="form-group col-lg-6">
                                                <label>Status</label>
                                                <select class="form-control" name="cat_status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Deactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                                <button type="reset" class="btn btn-default">Reset Button</button>
                                            </div>
                                        </div>
                                    </form>
                              
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    </div><!-- /.wrapper -->

    <?php
   	require_once 'incs/footer.php';
   ?>

   <script>
       $(document).ready(function() {
           $('#category-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                cat_name: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply category'
                        }
                    }
                }
                
                
                }
            })
       })
   </script>
</body>

</html>
