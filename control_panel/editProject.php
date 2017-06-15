<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';

$id = @$_GET['projectID'];
$sql = "select * from tblproject where p_id = $id";
$query = new database();
$row = @$query->select_one_record($sql);
$sql = "select * from tblcategory";
$categories = @$query->select_record($sql);
$sql = "select * from tblusers";
$users = @$query->select_record($sql);
$sql = "select * from usercompany";
$companies = @$query->select_record($sql);
if ($_POST) {
        $id = $_POST['p_id'];
        $fields = array('p_title', 'p_amount','p_duration', 'p_link', 'cat_id', 'UserID', 'c_id'
            , 'p_location', 'p_date', 'p_desc', 'p_story', 'p_status', 'p_verification', 'p_future', 'p_popular');
        $sql = $query->update_record('tblproject', $fields, "p_id = $id");

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record updated successfully";
        } else {
            $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
        }
        redirect('listProjects.php');
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
                            <h1 class="page-header">Edit Project</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Project
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form role="form" id="project-form" action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="p_id" value="<?php echo $row['p_id']; ?>" />
                                    <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Title </label>
                                                <input class="form-control" name="p_title" value="<?php echo $row['p_title']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Goal Amount</label>
                                                <input class="form-control" name="p_amount" placeholder="Goal Amount" value="<?php echo $row['p_amount']; ?>">
                                            </div>
                                            
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Funding Duration </label>
                                                <input class="form-control" name="p_duration" value="<?php echo $row['p_duration']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Fundrasing Image</label>
                                                <input class="form-control" type="file" name="p_photo" placeholder="Fundrasing Image" value="<?php echo $row['p_photo']; ?>">
                                            </div>
                                              
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Fundraising Video </label>
                                                <input class="form-control" name="p_link" value="<?php echo $row['p_link']; ?>">
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Category</label>
                                                <select class="form-control" name="cat_id">
                                                <?php foreach ($categories as $category) { 
                                                        if ($category['cat_id'] == $row['cat_id']) {
                                                    ?>
                                                    <option value="<?php echo $category['cat_id']; ?>" selected ><?php echo $category['cat_name']; ?></option>
                                                        <?php } else { ?>
                                                    <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['cat_name']; ?></option>
                                                <?php
                                                        } 

                                                    }
                                                ?>
                                                    
                                                </select>
                                            </div>
                                              
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>User</label>
                                                <select class="form-control" name="UserID">
                                                <?php foreach ($users as $user) { 
                                                        if ($user['UserID'] == $row['UserID']) {
                                                    ?>
                                                    <option value="<?php echo $user['UserID']; ?>" selected ><?php echo $user['FirstName'].' '.$user['LastName']; ?></option>
                                                        <?php } else { ?>
                                                    <option value="<?php echo $user['UserID']; ?>"><?php echo $user['FirstName'].' '.$user['LastName']; ?></option>
                                                <?php
                                                        } 

                                                    }
                                                ?>
                                                    
                                                </select>
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Company</label>
                                                <select class="form-control" name="c_id">
                                                <?php foreach ($companies as $company) { 
                                                        if ($company['c_id'] == $row['c_id']) {
                                                    ?>
                                                    <option value="<?php echo $company['c_id']; ?>" selected ><?php echo $company['c_name']; ?></option>
                                                        <?php } else { ?>
                                                    <option value="<?php echo $company['c_id']; ?>"><?php echo $company['c_name']; ?></option>
                                                <?php
                                                        } 

                                                    }
                                                ?>
                                                    
                                                </select>
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                    <label>Status</label>
                                                    <select class="form-control" name="p_status">
                                                        <option <?php echo ($row['p_status'] == 1?'selected': ''); ?> value="1">Active</option>
                                                        <option <?php echo ($row['p_status'] == 0?'selected': ''); ?> value="0">Inactive</option>
                                                    </select>
                                                </div>                                            
                                            <div class="form-group col-lg-6">
                                                    <label>Verification</label>
                                                    <select class="form-control" name="p_verification">
                                                        <option <?php echo ($row['p_verification'] == 1?'selected': ''); ?> value="1">Verify</option>
                                                        <option <?php echo ($row['p_verification'] == 0?'selected': ''); ?> value="0">Unverify</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                    <label>Popular</label>
                                                    <select class="form-control" name="p_popular">
                                                        <option <?php echo ($row['p_popular'] == 'yes'?'selected': ''); ?> value="yes">Popular</option>
                                                        <option <?php echo ($row['p_popular'] == 'no'?'selected': ''); ?> value="no">Not Popular</option>
                                                    </select>
                                                </div>                                            
                                            <div class="form-group col-lg-6">
                                                    <label>Featured</label>
                                                    <select class="form-control" name="p_future">
                                                        <option <?php echo ($row['p_future'] == 'yes'?'selected': ''); ?> value="yes">Futured</option>
                                                        <option <?php echo ($row['p_future'] == 'no'?'selected': ''); ?> value="no">Not Futured</option>
                                                    </select>
                                                </div> 
                                        </div>
                                        <div class="col-lg-12">
                                             <div class="form-group col-lg-6">
                                                <label>Location</label>
                                                <input class="form-control" name="p_location" value="<?php echo $row['p_location']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Date</label>
                                                <div class='input-group date'  data-provide="datepicker" id='datetime'>
                                                    <input class="form-control" name="p_date" value="<?php echo $row['p_date']; ?>">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="col-lg-12">
                                          <div class="form-group col-lg-6">
                                                <label>Short Descripation</label>
                                                <textarea name="p_desc" class="form-control"  rows="8"><?php echo $row['p_desc']; ?></textarea>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Your Story </label>
                                                <textarea name="p_story" class="form-control"  rows="8"><?php echo $row['p_story']; ?></textarea>
                                               
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
        $('.deleteUser').on('click', function() {
            if (confirm('Are you sure to delete this user?')) 
                return true;
            else
                return false;
        });
         $('#project-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                p_title: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply your project title'
                        }
                    }
                },
                 p_amount: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your project amount'
                        }
                    }
                },
                p_duration: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your project duration'
                        }
                    }
                },
                p_location: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your project location'
                        }
                    }
                },
                p_desc: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your project description'
                        }
                    }
                },
                 p_story: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply story'
                        }
                    }
                }

               
                
                
                }
            })
    });
</script>
</body>

</html>
