
<?php
session_start();
 $user_id=$_SESSION['user_id'];
 $curr_hour= date("G:i:s", time()+12600);
 
  include_once '../model/user.php';
    $obj=new User();
    $obj->logoutInfor($user_id);
    header("location:../view/sign_in_up.php");
    session_destroy();
?>
