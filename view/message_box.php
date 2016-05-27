<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="jquery-1.11.1.min.js" type="text/javascript" ></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <link href="facebox/facebox.css" media="screen" rel="stylesheet" type="text/css" />
        <script src="js/jquery_1.js" type="text/javascript"></script>
        <script src="facebox/facebox.js" type="text/javascript"></script>
        <script type="text/javascript">
        jQuery(document).ready(function($) {
        $('a[rel*=facebox]').facebox(
             {
        loadingImage : '../../common/facebox/loading.gif',
        closeImage   : '../../common/facebox/closelabel.png'
            })
        })
        </script> 
        <title>Chat Box</title>
    </head>
    <body style="background-image:url('images/background.jpg')">
       <script type="text/javascript">
           
              $(document).ready(function(){
         $('#sign_in_form').show();
         $('#sign_up_form').hide();
             });
        $(document).ready(function(){
        $('#btn_sign_in').click(function(){
         
         $('#sign_in_form').show();
         $('#sign_up_form').hide();
               }) ;
             });
             
            $(document).ready(function(){
        $('#online1').click(function(){
            $(location).attr('href','../controller/logou888t.php');
      
         
               }) ;
             }); 
              $(document).ready(function(){
        $('#btn_sign_out').click(function(){
      
         $('#sign_in_form').hide();
         $('#sign_up_form').show();
               }) ;
             });
             
              $(document).ready(function(){
        $('#logout').click(function(){
         
                  var confirmation=confirm("Are you sure you want to sign out");
                     if(confirmation){
                        $(location).attr('href','../controller/logout.php');
                        
           }
       
               }) ;
             });
             
             
             
</script>
        <div class="chatBox container" style="padding-bottom: 8px">
            <div class="user">
                <div class="btn-group">
                    <button id="online" class="btn btn-primary" type="button">
  Online <span class="badge" > <?php require_once '../model/user.php';
                            $obj = new user();
                            $result=$obj->onlineCount();
                            $value = mysql_fetch_assoc($result);
                           echo $value['friendCount'];
                           ?> </span>
</button>
  <button class="btn btn-primary" type="button">
  Friends <span class="badge">
      <?php 
       require_once '../model/user.php';
                            $obj = new user();
                            $result=$obj->friendCount();
                            $value = mysql_fetch_assoc($result);
                           echo $value['friendCount'];
      ?> 
  </span>
</button>
  <button class="btn btn-primary" type="button">
  Messages <span class="badge">
        <?php 
                            require_once '../model/user.php';
                            $obj = new user();
                            $result=$obj->messageCount();
                            $value = mysql_fetch_assoc($result);
                           echo $value['messageCount'];
                            ?>
      </span>
</button>
  <div class="btn-group">
       
  <button type="button" class="btn btn-primary"id="logout" onclick="confirmDelete(<?php 
                                                                                        //alert('sds');
                                                                                    echo $user_id    ?>)"/>Sign Out</button>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Go Offline</a></li>
    <li><a href="#">My Profile</a></li>
    <li class="divider"></li>
    <li><a href="#"><b><?php echo  Date('Y-m-d') ?><br/><?php echo date("G:i:s", time()+16200); ?>h</b></a></li>
  </ul>
</div>
</div>
                
            </div>
  <div class="signUp">
      <table border="0">
          <tr>
              <td>
                  <?php 
                  $image=$_REQUEST['image'];
                  $first_name=$_REQUEST['first_name'];
                      $last_name=$_REQUEST['last_name'];
                      $user_id=$_REQUEST['user_id'];
                ?>
                <img src="images/<?php echo  $image ?>" width="50px" height="50px" alt="..." class="img-thumbnail"></td><td>
                
                  </td><td>&nbsp;&nbsp;&nbsp;</td><td><h3 style=""><?php echo $first_name ?>&nbsp; <?php echo $last_name ?><h3></td><td>&nbsp;&nbsp;&nbsp;</td><td><img src="images/online.png" width="20px" height="20px" alt="..." style="">
                        </td>
                        </tr>
                        </table>
            </div>
            <div class="page-header">
  <h1>Chat <small>with kCHAT</small></h1>
</div>
            <style>
  .triangle-border {
  position:relative;
  padding:15px;
  margin:1em 0 3em;
  border:5px solid #5E9EB9;
  color:#333;
  background:#fff;
  /* css3 */
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  border-radius:10px;
}

/* Variant : for left positioned triangle
------------------------------------------ */

.triangle-border.left {
  margin-left:30px;
}

</style>
            <div class="main">
            hello,    
            </div>
                <div class="messegeBox">
                
                <div class="row">
                <form action="" method="" class="newMessage" id="newMessage" name="newMessage" onsubmit="return false">
                <div class="left col-xs-6">
                    <input type="text" name="newMessageContent" id="newMessageContent" value="enter user name" size="13px" />
                    <?php ?>
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_id ?>" />
                </div>
                    
                <div class="right col-sm-6">
                    <input type="submit" value="Send" class="btn btn-primary" name="newMessageSend" id="newMessageSend"/>
                </div>
                </form>
                    
                    </div>
            </div>
               
        </div>
        
         
         <!--<script src="signinout.js" type="text/javascript" ></script>-->
         <script src="send_message.js" type="text/javascript" ></script>
         <script src="refresh_message_log.js" type="text/javascript" ></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/respond.js"></script>
        
        
    </body>
</html>
