<?php 
require_once 'connection.php';

class signUpUsers{
    
    function signUpUserDetails($first_name,$last_name,$email,$password,$mobile,$image){
    $conn=new Connection();
      $sql="INSERT INTO user(first_name,last_name,email,password,mobile,image) VALUES
               ('$first_name','$last_name','$email','$password','$mobile','$image')";  
     $conn->query($sql);
    }
     
    function sendMessage($username,$time){
         $conn=new Connection();
        $sql="INSERT INTO messages (username,message_content,message_time) values ('$username','111','$time')";
 echo $sql;
  $result = mysql_query($sql,$conn) or die("Could not connect query");
        return $result;
    }
    
     function loginInfor($user_id){
    $conn=new Connection();
    $date=Date('Y-m-d');
    $curr_time= date("G:i:s", time()+12600-1740);
      $sql="UPDATE user SET login_date = '$date', login_time='$curr_time',status='2' WHERE id = '$user_id'"; 
      echo $sql;
     $conn->query($sql);
    }
    
      
}

?>