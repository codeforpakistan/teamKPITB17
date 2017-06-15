<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';

$id = @$_GET['userID'];
$sql = "select * from tblusers where UserID=$id";
$query = new database();
$row = @$query->select_one_record($sql);
if ($_POST) {
        $fields = array('FirstName', 'LastName','Email', 'NickName', 'date', 'Role_ID', 'status');
        $sql = $query->update_record('tblusers', $fields, "UserID = $id");

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record updated successfully";
        } else {
            $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
        }
        redirect('listUsers.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "ListUsers";
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
                            <h1 class="page-header">Edit User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit User
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form role="form" action="" method="post" id="user-form">
                                    <input type="hidden" name="UserID" value="<?php echo $row['UserID']; ?>" />
                                    <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>First Name</label>
                                                <div class="input-group">
                                                    <input class="form-control" name="FirstName" value="<?php echo $row['FirstName']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Last Name</label>
                                                <input class="form-control" name="LastName" placeholder="Last Name" value="<?php echo $row['LastName']; ?>">
                                            </div>
                                            
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Email</label>
                                                <input class="form-control" name="Email" value="<?php echo $row['Email']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Nick Name</label>
                                                <input class="form-control" name="NickName" placeholder="NickName" value="<?php echo $row['NickName']; ?>">
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>User Role</label>
                                                <select class="form-control" name="Role_ID">
                                                    <option <?php echo ($row['Role_ID'] == 1?'selected': ''); ?> value="1">User</option>
                                                    <option <?php echo ($row['Role_ID'] == 2?'selected': ''); ?> value="2">Admin</option>
                                                </select>
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Status</label>
                                                <select class="form-control" name="status">
                                                    <option <?php echo ($row['status'] == 1?'selected': ''); ?> value="1">Active</option>
                                                    <option <?php echo ($row['status'] == 0?'selected': ''); ?> value="0">Deactive</option>
                                                </select>
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Date</label>
                                                <div class='input-group date'  data-provide="datepicker" id='datetime'>
                                                    <input class="form-control" data-date-format="DD-MM-YYYY" name="date" value="<?php echo $row['date']; ?>">
                                                    <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            
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
             $('#user-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                FirstName: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply your first name'
                        }
                    }
                },
                 LastName: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your last name'
                        }
                    }
                },
                Email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            NickName: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your nick name'
                        }
                    }
                },
                date: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your date'
                        }
                    }
                },
                
                
                }
            })
        });

        
</script>
</body>

</html>
