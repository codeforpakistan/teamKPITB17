<?php 
require_once 'control_panel/config/config.php';
 require_once 'control_panel/config/connection.php';
include('control_panel/user_security.php'); 
require_once 'control_panel/classes/main_function.php';
$query = new database();
$tabe = $_GET['tabe'];
if (@$_FILES['img']['name'] != '') {
	$target_dir = "control_panel/uploads/profile/";
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
} else {
	$img = 'defaultUser.png';
}

if ($tabe == 'profile') {
	$id = $_POST['UserID'];
	$_POST['img'] = $img;
        $fields = array('FirstName', 'LastName','Email', 'phone', 'NickName', 'address', 'img');
        $sql = $query->update_record('tblusers', $fields, "UserID = $id");

        if (mysqli_query($connect, $sql)) {
            $_SESSION['success'] = "Record updated successfully";
        } else {
            $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
        }
        redirect('layout.php?tabe=profile');
}

if ($tabe == 'changepassword') {
            extract($_POST);

        $id = $_SESSION['userid'];

         $sql = "select * from tblusers where UserID = $id && Password = '$current_password'";
         $row = $query->select_record($sql); 

        if (count($row) > 0) {
            if ($Password == $confirm_password) {
                $sql = "update tblusers set Password = '$Password' where UserID = $id";
                $fields = array('Password');
                $where = "UserID = $id";
                $sql = $query->update_record('tblusers', $fields, $where);
                if (mysqli_query($connect, $sql)) {
                    $_SESSION['success'] = "Password changed successfully.";
                } else {
                    $_SESSION['error'] = "Error updating record: " . mysqli_error($connect);
                }
            } else {
                $_SESSION['error'] = "Make sure your confirm password is correct.";
            }
            
            
        } else {
            $_SESSION['error'] = "Make sure your current password is correct.";
        }
        redirect('layout.php?tabe=settings');

    }
