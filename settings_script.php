
<?php
    include 'common.php';

    $oldPassword = $_POST['oldPassword'];
    $oldPassword = mysqli_real_escape_string ($con , $oldPassword);
    $oldPassword = md5($oldPassword);

    $newPassword = $_POST['newPassword'];
    $newPassword = mysqli_real_escape_string ($con , $newPassword);
    $newPassword=md5($newPassword);

    $newPasswordRe = $_POST['newPasswordRe'];
    $newPasswordRe = mysqli_real_escape_string ($con , $newPasswordRe);
    $newPasswordRe = md5($newPasswordRe);

    $id = $_SESSION['id'];
        
    $select_query = "SELECT * FROM users WHERE id = '$id' AND password = '$oldPassword'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($select_query_result);

    if ($rows > 0 && $newPassword==$newPasswordRe){      
        $update_query = "UPDATE users SET password = '$newPassword' WHERE id = '$id'";
        $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));        
        header("location:settings.php?m1=<div class='alert alert-success'>Password changed successfully</div>");
    }else{        
        header("location:settings.php?m1=<div class='alert alert-danger'>Invalid credentials</div>");
    }
?>

