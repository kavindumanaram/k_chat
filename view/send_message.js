$(function() { 
$('#newMessageContent').click(function (){
    document.newMessage.newMessageContent.value="";
    });
  $('#newMessageSend').click(function() {
       var username=$('#user_id').val();
       var message=$('#newMessageContent').val();
       
       if(message=='' || message=='Enter your message'){
           window.alert("write some thing here");
            return false; 
            }
            var action="send_message";
            var dataString = 'username='+ username + '& message=' + message +'&action='+ action ;
           
            $.ajax({
                type:"POST",
                url:"send_message.php",
                data:dataString,
                success: function(){
                    document.newMessage.newMessageContent.value='';
                 // window.alert("u");   
                }
                
            });
        });
   }) ;
    
