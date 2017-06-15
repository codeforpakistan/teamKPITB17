<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';

$id = @$_GET['companyID'];
$sql = "select * from usercompany where c_id = $id";
$query = new database();
$row = @$query->select_one_record($sql);
if ($_POST) {
        $id = $_POST['c_id'];
        $fields = array('c_ntn', 'c_name','c_regno', 'c_email', 'c_website', 'c_phone', 'c_date'
            , 'c_status', 'c_detail', 'c_verification');
        $sql = $query->update_record('usercompany', $fields, "c_id = $id");

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record updated successfully";
        } else {
            $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
        }
        redirect('listCompanies.php');
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
                            <h1 class="page-header">Edit Company</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Company
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form role="form" action="" id="company-form" method="post">
                                    <input type="hidden" name="c_id" value="<?php echo $row['c_id']; ?>" />
                                    <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Company NTN</label>
                                                <input class="form-control" name="c_ntn" value="<?php echo $row['c_ntn']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Company Name</label>
                                                <input class="form-control" name="c_name" placeholder="Company Name" value="<?php echo $row['c_name']; ?>">
                                            </div>
                                            
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>PSEB/IT Board Regno </label>
                                                <input class="form-control" name="c_regno" value="<?php echo $row['c_regno']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Company Email</label>
                                                <input class="form-control" name="c_email" placeholder="Company Email" value="<?php echo $row['c_email']; ?>">
                                            </div>
                                              
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Website </label>
                                                <input class="form-control" name="c_website" value="<?php echo $row['c_website']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Phone No</label>
                                                <input class="form-control" name="c_phone" placeholder="Phone No" value="<?php echo $row['c_phone']; ?>">
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                
                                                <label>Date</label>
                                                 <div class='input-group date'  data-provide="datepicker" id='datetime'>
                                                    <input class="form-control" name="c_date" value="<?php echo $row['c_date']; ?>">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Status</label>
                                                <select class="form-control" name="c_status">
                                                    <option <?php echo ($row['c_status'] == 1?'selected': ''); ?> value="1">Active</option>
                                                    <option <?php echo ($row['c_status'] == 0?'selected': ''); ?> value="0">Deactive</option>
                                                </select>
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                                 <div class="form-group col-lg-6">
                                                    <label>Status</label>
                                                    <select class="form-control" name="c_verification">
                                                        <option <?php echo ($row['c_verification'] == 1?'selected': ''); ?> value="1">Verify</option>
                                                        <option <?php echo ($row['c_verification'] == 0?'selected': ''); ?> value="0">Unverify</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label>Explain Your bussiness </label>
                                                    <textarea rows="5" class="form-control" name="c_detail" placeholder="Message"><?php echo $row['c_detail']; ?></textarea>
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
           $('#company-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                c_ntn: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply your company NTN'
                        }
                    }
                },
                 c_name: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your Company Name'
                        }
                    }
                },
                c_regno: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your PSEB/IT Board Regno'
                        }
                    }
                },

                c_email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your Company Email'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            c_website: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your Website'
                        }
                    }
                },
            c_phone: {
                    validators: {
                         stringLength: {
                            min: 2,
                            number: true

                        },
                        notEmpty: {
                            message: 'Please supply your Phone No'
                        },
                        numeric: {
                                message: 'Please provide a vilade phone number.'
                        }
                    }
                },
                c_date: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your date'
                        }
                    }
                },
                 c_detail: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your Your bussiness explaination'
                        }
                    }
                }
                
                
                }
            })
    });
</script>
</body>

</html>
