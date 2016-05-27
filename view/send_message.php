<?php
require_once 'cn.php';
require_once 'protect.php';
      
 $username = protect($_REQUEST['username']);
 $message = protect($_REQUEST['message']);
 $time= date("G:i:s", time()+12600-1740);

 $sql="INSERT INTO messages (username,message_content,message_time) values ('$username','$message','$time')";
 echo $sql;
  $result = mysql_query($sql,$conn) or die("Could not connect query");
        return $result;
 
?>
