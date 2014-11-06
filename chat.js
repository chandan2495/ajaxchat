var counter=0;
        var running=false;
        var updateTime=5;
        
        function start()
        {
            
            
        $.post("./chat.php",{stage:"check"},function(data){
            if(data=="login")
            {
                $('#chatbox #initial').css('display','none');
                $('#form').css('display','inline');
                $('#chatbox #primary').css('display','inline');
                chat_load();
            }
            else
            {
                $('#chatbox #initial').css('display','inline');
                $('#form').css('display','none');
                $('#chatbox #primary').css('display','none');
            }
        });
        
        $('#p2').zero_clickable({
                    
                    id: "a1", 
                    singleton: true, 
                    clickout: true, 
                    css: { color: "#666666", "font-family": "monospace" }
  });
  
    $('#window').zero_clickable({
                    
                    id: "a1", 
                    singleton: true, 
                    clickout: true, 
                    css: { color: "#666666", "font-family": "monospace" }
  });
 $('#about').click(function(){
                   alert("about") ;
                });
       
    }
        
        function chat_delete(id)
        {
            alert(id);
            $.post("./chat.php",{stage:"delete",id:id},function(data){
                   //document.getElementById('chat_text').value='';
                   if(data=="good")
                    chat_load();
                    else{
                   alert("No username was found. Please reload chat window");
                   //alert(data);
               }
                   //$('#chatbox #primary #window').html($('#chatbox #primary #window').text()+data);
                });
        }
            
            function chat_initial()
            {
                var user=document.getElementById('chat_user').value;
                var pass=document.getElementById('chat_password').value;
                $.post('./chat.php',{stage:"initial",user:user,pass:pass},function(data){
                    //alert(data);
                   if(data == "good"){
                      $('#initial').css('display','none');
                      $('#form').css('display','inline');
                      $('#chatbox').css('display','inline');
                      $('#chatbox #primary').css('display','inline');
                      chat_load();
                   }
                       else{
                           var n = noty({text: 'Username/Password is incorrect',type: 'error',timeout:true});
                       }
                   });
            }
            
            function chat_send()
            {
                var text=document.getElementById('chat_text').value;
                $.post("./chat.php",{stage:"send",text:text},function(data){
                   document.getElementById('chat_text').value='';
                   if(data=="good")
                    chat_load();
                    else{
                   alert("No username was found. Please reload chat window");
                   //alert(data);
               }
                   //$('#chatbox #primary #window').html($('#chatbox #primary #window').text()+data);
                });
            }
            
            function chat_load()
            {
                $.post("./chat.php",{stage:"load"},function(data){
                      $('#chatbox #primary #window').html(data);  
                      setTimeout("chat_load();",1000*updateTime);
                });
                
            }
            
            function chat_logout()
            {
                $.post("./chat.php",{stage:"logout"},function(data){
                    if(data=="good"){
                      $('#initial').css('display','inline');
                      $('#chatbox').css('display','none');
                      $('#chatbox #primary').css('display','none');
                  }
                  else
                      alert("Already logout")
                });
            }