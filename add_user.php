
<?php 
require_once('./includes/function/function.php');
get_header();
get_sideber();

if (!empty($_POST)) {
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $pw=md5($_POST['pass']);
  $rpw=md5($_POST['repass']);
  $image=$_FILES['pic'];

  $image='user_'.time().'_'.rand(100000,10000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

  $insert="INSERT INTO users(user_name,user_phone,user_email,user_username,user_password) 
  VALUES('$name', '$phone','$email', '$username','$pw')";

 if (empty($name)) {
  if (mysqli_query($con,$insert)) {
    echo"User Registation success";
 } else {
  echo '<script>alert("Please enter Your Fulfill details");</script>';
  // echo"enter your name";
 }
}
}


require_once('./includes/Regi/registation.php');
get_footer();



?>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>