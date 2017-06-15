<?php 
$id = $_SESSION['userid'];
$sql = "select * from tblusers where UserID = $id";
$row = @$query->select_one_record($sql);
?>

<div class="row">
        
          <div class="col-lg-12">
            <h3>Personal Details</h3>
            
            <form action="userUpdate.php?tabe=profile" id="profile-form" class="form-ui" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $row['UserID']; ?>" name="UserID" />
            
            <div id="basic-data" class="form-wizard active">
           	            
                <div class="form-left form-group col-lg-6">
                  <input type="text" class="form-control" placeholder="First Name" name="FirstName" value="<?php echo $row['FirstName']; ?>">
                </div>
                <div class="form-right form-group col-lg-6">
                 <input type="text" value="<?php echo $row['LastName']; ?>" class="form-control" placeholder="Last Name" name="LastName">
                  
                </div>
                <div class="clear"></div>
              
                <div class="form-left form-group col-lg-6">
                <input type="text" value="<?php echo $row['Email']; ?>" class="form-control" placeholder="Email" name="Email">
                  
                </div>
                <div class="form-right form-group col-lg-6">
                <input type="text" value="<?php echo $row['phone']; ?>" class="form-control" placeholder="Contact Number" name="phone">
                </div>
                <div class="clear"></div>
                <div class="form-left form-group col-lg-6">
                <input type="text" value="<?php echo $row['NickName']; ?>" class="form-control" placeholder="User Name" name="NickName">
                  
                </div>
                <div class="form-right form-group col-lg-6">
                <input type="text" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Address" name="address">
                </div>
                <div class="clear"></div>
              <div class="form-group">
             	 
             	 <div class="form-left">
             	 <img id="image" src="control_panel/uploads/profile/<?php echo $row['img']; ?>" width="100" />
                	<input id="new-image" type="file" style="width: 80%; float: right; height: 100px;" value="" class="form-control" name="img" />
                </div>
                  
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-4 blue default">Submit</button>
              </div>
              
            </div>
            
            </form>
          </div>
               
      </div>
      <script type="text/javascript">
      $(document).ready(function() {

      	var inp = document.getElementById('new-image');
		inp.addEventListener('change', function(e){
		    var file = this.files[0];
		    var reader = new FileReader();
		    reader.onload = function(){
		        document.getElementById('image').src = this.result;
		        };
		    reader.readAsDataURL(file);
		    },false);

// bootstrap validation start from here.
             $('#profile-form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
           /* feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },*/
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
             phone: {
                    validators: {
                         stringLength: {
                            min: 2,
                            number: true

                        },
                        notEmpty: {
                            message: 'Please supply your Phone No'
                        },
                        numeric: {
                                message: 'Please provide a valide phone number.'
                        }
                    }
                },    
            address: {
                    validators: {
                         stringLength: {
                            min: 2,
                        },
                        notEmpty: {
                            message: 'Please supply your address.'
                        }
                    }
                },  
             
                
                
                }
            })
		      });
      </script>