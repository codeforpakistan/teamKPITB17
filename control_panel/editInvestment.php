<?php
	require_once 'config/config.php';
	require_once 'config/connection.php';
	require_once 'config/security.php';
	require_once 'classes/main_function.php';

$id = @$_GET['investmentID'];
$sql = "select * from tblinvestments where invest_id = $id";
$query = new database();
$row = @$query->select_one_record($sql);
$sql = "select * from tblusers";
$users = @$query->select_record($sql);
$sql = "select * from tblproject";
$projects = @$query->select_record($sql);
if ($_POST) {
        $id = $_POST['invest_id'];
        $fields = array('invest_fname', 'invest_lname','invest_email', 'invest_address', 'invest_country', 'invest_city', 'invest_cell'
            , 'invest_phone', 'invest_comment', 'UserID', 'invest_amount', 'p_id');
        $sql = $query->update_record('tblinvestments', $fields, "invest_id = $id");

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record updated successfully";
        } else {
            $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
        }
        redirect('listInvestments.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php
		$title = "Edit Investment";
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
                            <h1 class="page-header">Edit Investment</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Edit Investment
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <form role="form" id="investment-form" action="" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="invest_id" value="<?php echo $row['invest_id']; ?>" />
                                    <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>First Name </label>
                                                <input class="form-control" name="invest_fname" value="<?php echo $row['invest_fname']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Last Name</label>
                                                <input class="form-control" name="invest_lname" placeholder="Last Name" value="<?php echo $row['invest_lname']; ?>">
                                            </div>
                                            
                                        </div>
                            
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Email </label>
                                                <input class="form-control" name="invest_email" value="<?php echo $row['invest_email']; ?>">
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label>Address </label>
                                                <input class="form-control" type="text" name="invest_address" placeholder="Address" value="<?php echo $row['invest_address']; ?>">
                                            </div>
                                              
                                        </div>
                                         <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Country </label>
                                                <input class="form-control" name="invest_country" value="<?php echo $row['invest_country']; ?>">
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>City </label>
                                                <input class="form-control" name="invest_city" value="<?php echo $row['invest_city']; ?>">
                                            </div>
                                             
                                              
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-6">
                                                <label>Cell Number </label>
                                                <input class="form-control" name="invest_cell" value="<?php echo $row['invest_cell']; ?>">
                                            </div>
                                             <div class="form-group col-lg-6">
                                                <label>Phone Number </label>
                                                <input class="form-control" name="invest_phone" value="<?php echo $row['invest_phone']; ?>">
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
                                                <label>Status</label>
                                                <?php if($row['invest_status'] == 1){
													$value='verified';
													} 
													else {
														$value = 'Not Verified';
														}?>
                                                 <input class="form-control" name="dada" value="<?php echo $value; ?>" readonly>
                                            </div>
                                              
                                        </div>
                                        <div class="col-lg-12">
                                         <div class="form-group col-lg-6">
                                                <label>Invest Amount </label>
                                                <input class="form-control" name="invest_amount" value="<?php echo $row['invest_amount']; ?>">
                                            </div>
                                          <div class="form-group col-lg-6">
                                                <label>Projects </label>
                                                <select class="form-control" name="p_id">
                                                <?php foreach ($projects as $project) { 
                                                        if ($project['p_id'] == $row['p_id']) {
                                                    ?>
                                                    <option value="<?php echo $project['p_id']; ?>" selected ><?php echo $project['p_title']; ?></option>
                                                        <?php } else { ?>
                                                    <option value="<?php echo $project['p_id']; ?>"><?php echo $project['p_title']; ?></option>
                                                <?php
                                                        } 

                                                    }
                                                ?>
                                                    
                                                </select>
                                            </div>
                                        
                                              
                                        </div>
                                        
                                        
                                        <div class="col-lg-12">
                                          <div class="form-group col-lg-12">
                                                <label>Comment</label>
                                                <textarea name="invest_comment" class="form-control"  rows="8"><?php echo $row['invest_comment']; ?></textarea>
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
    
         $('#investment-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                invest_fname: {
                    validators: {
                            stringLength: {
                            min: 2,
                        },
                            notEmpty: {
                            message: 'Please supply investment first name'
                        }
                    }
                },
                 invest_lname: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply investment last name'
                        }
                    }
                },
                invest_email: {
                        validators: {
                        notEmpty: {
                            message: 'Please supply your Company Email'
                        },
                        emailAddress: {
                            message: 'Please supply a valid email address'
                        }
                    }
                    },
                invest_address: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply investment address'
                        }
                    }
                },
                invest_country: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply investment country'
                        }
                    }
                },
                 invest_city: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply investment city'
                        }
                    }
                }
                ,
                 invest_cell: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        integer: {
                                message: 'Please provide a vilade phone number.'
                        }
                    }
                },
                 invest_phone: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        integer: {
                                message: 'Please provide a vilade phone number.'
                        }
                    }
                },
                 invest_comment: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply investment comment'
                        }
                    }
                },
                 invest_amount: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply investment comment'
                        }
                    }
                }

               
                
                
                }
            })
    });
</script>
</body>

</html>
