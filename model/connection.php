<?php
class connection{
    function  query($sql){
        $conn=  mysql_connect('YOUR_SERVER_NAME','USERNAME','PASSWORD') 
                or die("Could not connect server");
        $db=  mysql_select_db('0fe_15420609_chat_box',$conn) 
                or die("Could not connect database");
        $result = mysql_query($sql) or die("Could not connect query");
        return $result;
        
    }
    
    
    
}
?>
