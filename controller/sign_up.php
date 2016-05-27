<?php

require_once '../model/sign_up.php';

$action=$_POST['action'];

switch ($action) {
    case 'sign_up':
        signUPUser();
        break;

    default:
        break;
}

function signUpUser(){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=($_POST['password1']);
    $mobile=$_POST['mobile'];
    $image='aa.png';
       
    if($_FILES['image']['name']!=""){
    if ((($_FILES["image"]["type"]=="image/gif")
           || ($_FILES["image"]["type"]=="image/jpeg")
           || ($_FILES["image"]["type"]=="image/png")
           ||  ($_FILES["image"]["type"]=="image/pjpeg"))
            &&($_FILES["image"]["size"] <500000000))    
    {
        
        $image=date('U')."_".$_FILES["image"]["name"];
        move_uploaded_file($_FILES['image']['tmp_name'],
            '../view/images/'.$image);
    }

}
    
    
    $obj=new signUpUsers();
    $obj->signUpUserDetails($first_name,$last_name,$email,$password,$mobile,$image);
     header('location:../view/sign_in_up.php');
}

?>