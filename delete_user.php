<?php 
require_once('./includes/function/function.php');
$id=$_GET['d'];
$del="DELETE FROM users WHERE user_id='$id'";

if (mysqli_query($con,$del)) {
    header('location: all_user.php');
} else {
    echo"OPPs Sorry";
}



?>