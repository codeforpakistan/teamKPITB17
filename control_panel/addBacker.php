<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';

$query = new database();

if ($_POST) {
        if (@$_FILES['img']['name'] != '') {
            $target_dir = "uploads/backers/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["img"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["img"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            exit();
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                $img = basename($_FILES["img"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
                exit;
            }
        }
        $_POST['img'] = $img;
        } else {
            $_SESSION['error'] = "Please select image for backers.";
            redirect('addBacker.php');
        }
        
        $fields = array('title', 'img');
        $sql = $query->insert_record('tblbackers', $fields);

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record created successfully";
        } else {
            $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
        }
        redirect('listBackers.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "Add Backer";
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
                            <h1 class="page-header">Add Backer</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add Admin
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form role="form" id="backer-form" action="" method="post" enctype="multipart/form-data">
    
                                    <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Title</label>
                                                <input type="text" class="form-control" name="title">
                                            </div>
                                            
                                            <div class="form-group col-lg-6">
                                                <label>Image:</label>Upload Image 160px * 160px for Best Output
                                                <input type="file" class="form-control" name="img" >
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
           $('#backer-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                title: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply your user name'
                        }
                    }
                }
                
                
                }
            })
       })
   </script>
</body>

</html>
