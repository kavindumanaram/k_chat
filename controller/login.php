<?php
//start the session    
    session_start();
    require_once '../model/user.php';
//retrive the password and user name from 'home/view/login.php'  
    $userName=$_POST['user_name'];
    $password1= $_POST['password'];
    $password=($_POST['password']);
//echo $userName;
//echo $password;
//echo $password1;
    $obj=new User();
    $result1=  mysql_fetch_assoc($obj->getUserPassword1($userName));
    $user_id= $result1['id'] ;
    $pw= $result1['password'] ;

//require_once '../model/login.php';
//create  object(obj) of the Login
    $obj=new User();
    $result=$obj->userlogin($userName,$password);
    $num=  mysql_num_rows($result);
    //$first_name=$result['first_name'];
//    
//    require_once '../model/employee.php';
//    $obj1=new employee();
//    $result3=$obj1->loginTimeDetails($employee_id);
   
    
//check whether user is exist
    if($num==0){
//if user is not available
   header("Location:../view/sign_in_up.php?err=1");
    }

//if user is available
    else {
        $val=mysql_fetch_assoc($result);
        $_SESSION['first_name']=$val['first_name'];
        $_SESSION['last_name']=$val['last_name'];
        $_SESSION['user_id']=$val['id'];
        $_SESSION['image']=$val['image'];
        
        require_once '../model/sign_up.php';
        $obj=new signUpUsers();
        $obj->loginInfor($user_id);
        
        header("Location:../view/message_box.php?first_name=".$_SESSION['first_name']."&last_name=".$_SESSION['last_name']."&user_id=".$_SESSION['user_id']."&image=".$_SESSION['image']);

        
     //header('location:../model/sign_up.php');
    }
?>



