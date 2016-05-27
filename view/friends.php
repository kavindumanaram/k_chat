
<link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="jquery-1.11.1.min.js" type="text/javascript" ></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
<table class="table" border='1'>
    <?php

                            require_once '../model/user.php';
                            $obj = new User();
                            $result=$obj->getFriends();
                            while ($value = mysql_fetch_assoc($result)){
                       

?>
    <tr>
        <td><img src="images/aa.png" width="30px" height="30px"/>
            </td>
        <td><?php echo $value['first_name'];  ?></td>
        <td><?php echo $value['last_name']; ?></td>
    </tr>
     <?php } ?>
</table>

                           