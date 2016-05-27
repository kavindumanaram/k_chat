<?php

require_once '../model/sign_up.php';

$action=$_POST['action'];

switch ($action) {
    case 'send_message':
        sendMessage();
        break;

    default:
        break;
}

function sendMessage(){
   $username =11;
 $message =11;
 $time=11;
    
    $obj=new signUpUsers();
    $obj->sendMessage($username,$message,$time);
     header('location:../view/message_box.php');
}

?>