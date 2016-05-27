<?php
class connection{
    function  query($sql){
        $conn=  mysql_connect('sql311.0fees.us','0fe_15420609','kavindu999k') 
                or die("Could not connect server");
        $db=  mysql_select_db('0fe_15420609_chat_box',$conn) 
                or die("Could not connect database");
        $result = mysql_query($sql) or die("Could not connect query");
        return $result;
        
    }
    
    
    
}
?>
