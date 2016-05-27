<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="jquery-1.11.1.min.js" type="text/javascript" ></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <title>Chat Box</title>
    </head>
    <body style="background-image:url('images/background.jpg')">
       <script type="text/javascript">
           
              $(document).ready(function(){
         $('#sign_in_form').show();
         $('#sign_up_form').hide();
         $('#alert1').hide();
         $('#alert2').hide();
         
             });
        $(document).ready(function(){
        $('#btn_sign_in').click(function(){
         
         $('#sign_in_form').show();
         $('#sign_up_form').hide();
               }) ;
             });
             
             
              $(document).ready(function(){
        $('#btn_sign_out').click(function(){
      
         $('#sign_in_form').hide();
         $('#sign_up_form').show();
               }) ;
             });
             
              $(document).ready(function(){
        $('#signIn_submit').click(function(){
      
      var password = $('#password').val();
     if(password == "" || user_name ==""){
         $('#alert1').show();
         return false;
     }
     else{
          $('#alert1').hide();
          return true;
     }
               }) ;
             });
             
           $(document).ready(function(){
        $('#signUp_submit').click(function(){
      
      var password1 = $('#password1').val();
      var password2 = $('#password2').val();
      var first_name = $('#first_name1').val();
      var last_name = $('#last_name').val();
      var email = $('#email').val();
      var mobile = $('#mobile').val();
     
     if(password1!=password2){
                alert('The passwords doesnt match');
                return false;
                   }
                if(password1.length<6){
                alert('The password length doesnt enough');
                return false;
                   }
        if(password1 == "" || password2 =="" || first_name=="" || last_name=="" || email=="" || mobile==""){
         $('#alert2').show();
         return false;
     }
     else{
          $('#alert2').hide();
          return true;
     }
     
     
                 
        
               }) ;
             });
</script>
        <div class="chatBox container" style="padding-bottom: 8px">
            <div class="user">
                <div class="btn-group">
  <button type="button" id="btn_sign_in" class="btn btn-primary ">Sign In</button>
  <button type="button" id="btn_sign_out" class="btn btn-primary">Sign Up</button>
  
</div>
            </div>
  <div class="form-group" id="sign_in_form">
      <?php if(isset($_REQUEST['err'])){ ?>
                
		 <?php
                 if(isset($_REQUEST['err'])&& ($_REQUEST['err']==1)){
                echo '<div class="alert alert-danger" role="alert" id="alert1"> Invalid Access</div>';                
                 }
                else if(isset($_REQUEST['err'])&& ($_REQUEST['err']==2)){
  echo '<div class="alert alert-danger" role="alert" id="alert1">Please login to access</div>';
                 }
                 
                  else if(isset($_REQUEST['err'])&& ($_REQUEST['err']==3)){
  echo ' <div class="alert alert-danger" role="alert" id="alert1">Your Profile Details Are Updated. Please Logging To Access </div>';
                 }
                 
                ?></p>
              
                
                
                <?php } ?>
                <div class="page-header">
                    <div class="alert alert-danger" role="alert" id="alert1"> Invalid Access</div>
  <h1>Sign In <small>with kCHAT</small></h1>
</div>
      <form name ="sigInForm" action="../controller/login.php" method="POST">
            <label for="exampleInputFirstName">User Name</label>
            <input type="text" class="form-control" id="first_name" name="user_name" placeholder="First Name">
             
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password"><br/>
            <input type="hidden" name="action" value="sign_in" />
            <input type="submit"  id="signIn_submit" value="Sign In" class="btn btn-primary" >
             
            </form>
            </div>
           <div class="form-group" id="sign_up_form">
                <div class="page-header">
                    <div class="alert alert-danger" role="alert" id="alert2"> Fill all fields in below</div>
  <h1>Sign Up <small>with kCHAT</small></h1>
</div>
               <form name ="sigUpForm" action="../controller/sign_up.php" method="POST">
            <label for="exampleInputFirstName">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name1" placeholder="First Name">
            
            <label for="exampleInputFirstName">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">

           
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
            
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
           
            <label for="exampleInputMobile">Mobile</label>
            <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile"><br/>
            
            <label for="exampleInputFile">Image input</label>
    <input type="file" id="image" name="image">
  
            <input type="hidden" name="action" value="sign_up" />
            <input type="submit"  id="signUp_submit" value="Sign up" class="btn btn-primary" >
             
            </form>
            </div>    
        </div>
        
         
         <script src="js/bootstrap.min.js"></script>
         <script src="js/respond.js"></script>
        
    </body>
</html>
