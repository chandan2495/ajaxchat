<?php 
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>AJAX CHAT</title>
        <script type="text/javascript" src="jquery-2.1.0.js"></script>
        <script type="text/javascript">
            function chat_send()
            {
                var text=document.getElementById('chat_text').value;
                $.post("./chat.php",{stage:"send",text:text},function(data){
                   document.getElementById('chat_text').value='';
                   if(data=="good")
                    chat_load();
                    else{
                   alert("No username was found. Please reload chat window");
                   alert(data);
               }
                   //$('#chatbox #primary #window').html($('#chatbox #primary #window').text()+data);
                });
            }
            
            function chat_load()
            {
                $.post("./chat.php",{stage:"load"},function(data){
                      $('#chatbox #primary #window').html(data);  
                });
            }
        </script>
         <link rel="stylesheet" href="style.css"/>
</head>
<body>
 <div id="chatbox">
 <div id="primary">
            <div id="window"></div>
            <div id="form">
                <table style="width: 100%">
                    <tr>
                        <td width="90%"><input type="text" id="chat_text" name="chat_text" style="width:90%"/></td>
                        <td align="center"><input type="button" id="chat_send" value="chat!" onClick="chat_send()"></td>    
                    </tr>
                </table>
            </div>
 </div>
</div>
</body>
</html>