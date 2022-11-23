
<?php

require_once 'C:\xampp\htdocs\learnPHP\adminWithAgex\function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$fist_name = $_POST['frist_name'];
$last_name = $_POST['last_name'];
$eamil = $_POST['uemail'];
$password = $_POST['upassword'];


$register = new Register();
  $result = $register->registration($fist_name,$last_name,$eamil,$password);
  if($result == 1){
    echo 1;
  }
  if($result==10){
    echo 0;
  }
  // if($result == 1){
  //   echo
  //   "<script> alert('Registration Successful'); </script>";
  //   header("Location: login.php");
  // }

  // elseif($result == 100){
  //   echo
  //   "<script> alert('Password Does Not Match'); </script>";
  // }

?>