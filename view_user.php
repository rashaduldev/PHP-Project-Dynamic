<?php 
require_once('./includes/function/function.php');
get_header();
get_sideber();
require_once('./includes/User/user.php');
get_footer();

// $id=$_GET['v'];
// $sel="SELECT * FROM users WHERE user_id='$id'";
// $Q=mysqli_query($con,$sel);
// $data=mysqli_fetch_assoc($Q);

?>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>