<?php

require_once 'connection.php';
class User {
    function getuserDetails(){
        $conn=new Connection();
        $sql="select *from user";
        $conn->query($sql);
    }
    
     function getUserPassword1($userName){
        
        $conn=new connection();
        $sql="SELECT *  FROM user where email='$userName'";
        echo $sql;
        $result=$conn->query($sql);
        return $result;
        
    }
function userLogin($userName,$password){
        $conn = new connection();
        $sql="SELECT * FROM user WHERE email='$userName' 
                AND password='$password'";
        echo $sql;
        $result=$conn->query($sql);
        return $result;
}
function messageCount(){
    $conn = new connection();
        $sql="SELECT COUNT( *) AS messageCount
FROM messages";
     //   echo $sql;
        $result=$conn->query($sql);
        return $result;
}

function friendCount(){
    $conn = new connection();
        $sql="SELECT (COUNT( * )-1) AS friendCount
FROM user";
     //   echo $sql;
        $result=$conn->query($sql);
        return $result;
}


function onlineCount(){
    $conn = new connection();
        $sql="SELECT (COUNT( * )) AS friendCount
FROM user where status='2'";
     //   echo $sql;
        $result=$conn->query($sql);
        return $result;
}


function getFriends(){
      $conn = new connection();
        $sql="SELECT * FROM user";
     //   echo $sql;
        $result=$conn->query($sql);
        return $result;
}
function logoutInfor($user_id){
    $conn=new Connection();
    $date=Date('Y-m-d');
    $curr_time= date("G:i:s", time()+12600-1740);
      $sql="UPDATE user SET logout_date = '$date', logout_time='$curr_time',STATUS = '1' WHERE id  = '$user_id'"; 
      echo $sql;
     $conn->query($sql);
    }
     }

?>
