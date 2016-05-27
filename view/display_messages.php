<?php

require_once 'cn.php';
$fiveMinuteAgo =  date("G:i:s", time()+15880);
$sql="SELECT *
FROM messages, user
WHERE message_time > '.$fiveMinuteAgo.'
AND user.id = username
GROUP BY messages.id
ORDER BY messages.id";
$result = mysql_query($sql,$conn) or die("Could not connect query");
       
while ($row = mysql_fetch_assoc($result)){
    $hoursAndMinute = $row['message_time'];
    echo '<p><img src="images/'. $row["image"].'" width="30px" height="30px"/>
<b>' . $row["first_name"] . ':</b>&nbsp<div class="triangle-border"><i>'. $row["message_content"]  .'</i></p><font size="1px" style="float:center"><i>'.$hoursAndMinute.'</i></font></div>';
}
 
?>
