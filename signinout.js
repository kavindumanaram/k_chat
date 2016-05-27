
$(function(){
    $('#newMessage').hide();
    $('#messsageBoxSignIn').click(function()
{ $('#username').focus();   });
});

$(function () {
$('.error').hide();
$('#signIn').click(function(){
    var username = $('#username').val();
    
    if(username == '' || username == 'enter user name'){
        $('.error').show();
        return false;
    }
    
    $('#messsageBoxSignInForm').hide();
    $('.newMessage').show();
    
    var dataString = 'username=' + username;

    $.ajax({
        type:"POST",
        url:"signinout.php",
        data:dataString,
        success: function(){   
            $('.user').html('<span style="font-color:blue;font-weight:bolder">Welcome <span id="loggedUser">' + username + '</span>  </span> <a\n\
             id="signOut" onclick="window.location.reload()" > Sign Out</a>');
        }
    });
    });
});