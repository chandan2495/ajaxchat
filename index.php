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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" type="text/css" href="css/jquery.zero_clickable.css" />
        <link rel="stylesheet" type="text/css" href="wikiUp.css"/>
        <style type="text/css">
            #a1 {
                background-color: #FFFFFF;
            }

            .panel-primary .panel-heading{
                background-color: #1ABC9C;
                border-color: #1ABC9C;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link href="css/flat-ui.css" rel="stylesheet"/>
        <link href="css/stroll.css" rel="stylesheet"/>
        <link href="css/stroll.min.css" rel="stylesheet"/>

        <style type="text/css">
            .panel-primary .panel-heading{
                background-color: #1ABC9C;
                border-color: #1ABC9C;
            }

        </style>
    </head>
    <body>
        <?php
        include "header.php";
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="initial">

                        <div class="header">
                            <img src="images/icons/png/Chat.png" id="icon1"/>
                        </div>
                        <div class="login-form login1" style="width:350px">
                            <div class="form-group">
                                <input type="text" class="form-control login-field" value="" placeholder="Enter your name" name="chat_user" id="chat_user" onkeypress="if (event.keyCode == 13) {
                                            chat_initial();
                                        }"/>
                                <label class="login-field-icon fui-user" for="login-name"></label>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control login-field" value="" placeholder="Password" name="chat_password" id="chat_password" onkeypress="if (event.keyCode == 13) {
                                            chat_initial();
                                        }"/>
                                <label class="login-field-icon fui-lock" for="login-pass"></label>


                            </div>
                        </div>

                        <div class="login-form register1" style="width:350px">
                            <div class="form-group">
                                <input type="text" class="form-control login-field" value="" placeholder="User name" name="reg_user" id="reg_user"/>
                                <label class="login-field-icon fui-user" for="login-name"></label>
                            </div>

                            <div class="form-group" >
                                <input type="password" class="form-control login-field" value="" placeholder="Password" name="reg_password" id="reg_password" />
                                <label class="login-field-icon fui-lock" for="login-pass"></label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control login-field" value="" placeholder="Email Id" name="reg_email" id="reg_email"/>
                            </div>

                        </div>
                        <div class="buttons" style="width:350px">
                            <a class="btn btn-primary btn-lg btn-block loginbt" href="#" onclick="chat_initial()" style="width:30%; float:left; margin-top:5px;  margin-left:25px">Login</a>
                            <a class="btn btn-primary btn-lg btn-block registerbt" href="#" onclick="chat_register()" style="width:30%; float: right; margin-right:25px">Register</a>  
                        </div>
                    </div>
                </div>        
            </div>

            <div class="panel panel-primary main" style="width:50%">
                <div class="panel-heading">Chat Window</div>
                <div id="chatbox">


                    <div id="primary">
                        <div id="window"></div>

                    </div>
                </div>
            </div>
            <div id="summarizersup">
                <div class="panel panel-primary">
                    <div class="panel-heading">Summarizer</div>
                    <div id="summarizer"></div>      
                </div>
            </div>
            <div id="userlist">
                <div class="panel panel-primary">
                    <div class="panel-heading">Online Users</div>
                    <div id="userlistsub"></div>
                </div>
            </div>

<!-- Feedzilla Widget BEGIN -->

<div class="feedzilla-news-widget feedzilla-6114471670182356 news" style="width:250px; padding: 0; text-align: center; font-size: 11px; border: 0; position: absolute; left: 75%; top: 370px;">
<script type="text/javascript" src="js/widget.js"></script>
<script type="text/javascript">
new FEEDZILLA.Widget({
	style: 'slide-top-to-bottom',
	culture_code: 'en_in',
	c: '989',
	sc: '26246',
	headerBackgroundColor: '#1abc9c',
	footerBackgroundColor: '#1abc9c',
	title: 'Top News',
	caption: 'Top Stories',
	order: 'relevance',
	count: '20',
	w: '250',
	h: '300',
	timestamp: 'true',
	scrollbar: 'false',
	theme: 'start',
	className: 'feedzilla-6114471670182356'
});
</script><br />
<a href="http://widgets.feedzilla.com/news/builder/index.html?utm_source=feedzilla&utm_medium=widget&utm_campaign=widget%2Blink" target="_blank">Get Your News Widget</a>
</div>

<!-- Feedzilla Widget END -->
        
            <div id="form" class="container">

                <div class="form-group">
                    <input type="text" class="form-control" id="chat_text" name="chat_text" data-provide="typeahead" onkeypress="if (event.keyCode == 13) {
                                chat_send();
                            }" />



                    <input class="btn btn-success" type="button" id="chat_send" value="chat!" onClick="chat_send()"/> 
                    <input class="btn btn-primary" type="button" id="chat_logout" value="Logout" onClick="chat_logout()"/>


                </div>

            </div>
        </div>

        </div>
        <script type="text/javascript" src="js/jquery-2.1.0.js"></script>

        <script type="text/javascript" src="js/alljs.php@v=1317499866"></script>
        <script src="js/jquery.zero_clickable.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/typeahead.js"></script>

        <script type="text/javascript" src="js/packaged/jquery.noty.packaged.min.js"></script>
        <script type="text/javascript" src="js/jquery.jwNotify.js"></script>
        <script type="text/javascript" src="js/stroll.js"></script>
        <script type="text/javascript" src="js/stroll.min.js"></script>
        <script type="type/javascript" src="wikiUp.js"></script>



        <script type="text/javascript">
                        $(document).ready(function() {
                            $('#chat_send').click(function(event) {
                                event.preventDefault();
                                $.jwNotify({
                                    image: 'Chat.png',
                                    title: 'Chandan',
                                    body: $('#chat_text').val(),
                                    onshow: function() {
                                        console.log('function closed');
                                    }
                                });
                            });


                            $("body").ready(function() {
                                start();
                            });


                          


                        });
        </script>
        <script type="text/javascript">

            var counter = 0;
            var running = false;
            var updateTime = 5;
            var string = "";
            function start()
            {
                window.setInterval(function() {
                    var elem = document.getElementById('window');
                    elem.scrollTop = elem.scrollHeight;
                }, 5000);

                $.post("./chat.php", {stage: "check"}, function(data) {
                    if (data == "login")
                    {
                        $('#initial').css('display', 'none');
                        $('.register1').css('display', 'none');
                        $('#form').css('display', 'inline');
                        $('#chatbox #primary').css('display', 'inline');
                        $('#summarizer').css('display', 'inline');
                        $('#summarizersup').css('display', 'inline');
                        $('#userlist').css('display', 'inline');
                        $('.panel-primary').css('display', 'block');
                        $('.news').css('display','inline');
                        chat_load();
                        chat_summarize();
                        chat_onlinelist();
                    }
                    else
                    {
                        $('.news').css('display','none');
                        $('.register1').css('display', 'none');
                        $('#form').css('display', 'none');
                        $('#chatbox #primary').css('display', 'none');
                        $('#summarizer').css('display', 'none');
                        $('#summarizersup').css('display', 'none');
                        $('#userlist').css('display', 'none');
                        $('.panel-primary').css('display', 'none');
                        $('#initial').css('display', 'inline');
                        
                    }
                });


                $('.loginbt').hover(function() {
                    $('.register1').hide();
                    $('.login1').show();
                });


                $('.registerbt').hover(function() {
                    $('.login1').hide();

                    $('.register1').show();

                });


                $('#p2').zero_clickable({
                    id: "a1",
                    singleton: true,
                    clickout: true,
                    css: {color: "#666666", "font-family": "monospace"}
                });

                $('#window').zero_clickable({
                    id: "a1",
                    singleton: true,
                    clickout: true,
                    css: {color: "#ffffff", "font-family": "monospace", "background-color": "#1abc9c", "border": "none", "font-weight": "bold"}
                });
                $('#summarizer').zero_clickable({
                    id: "a1",
                    singleton: true,
                    clickout: true,
                    css: {color: "#ffffff", "font-family": "monospace", "background-color": "#1abc9c", "border": "none", "font-weight": "bold"}
                });
                $('#about').click(function() {
                    alert("about");
                });


                $('#Notify').click(function() {
                    $.jwNotify({
                        image: 'Chat.png',
                        title: 'Chat Message',
                        body: 'Hello'
                    });
                });

                stroll.bind(document.getElementById('window div'));
            }

            function chat_register()
            {
                var user = document.getElementById('reg_user').value;
                var pass = document.getElementById('reg_password').value;
                var email = document.getElementById('reg_email').value;
                $.post('./chat.php', {stage: "register", user: user, pass: pass, email: email}, function(data) {
                    if (data == "good") {
                        var n = noty({text: 'Successfully Register', type: 'success', timeout: true});
                        document.getElementById('reg_user').value = "";
                        document.getElementById('reg_password').value = "";
                        document.getElementById('reg_email').value = "";
                    }
                    else if (data == "taken")
                    {
                        var n = noty({text: 'Already taken! Choose another username', type: 'error', timeout: true});
                        
                    }
                    else {
                        var n = noty({text: 'Unable to register. Try Again', type: 'error', timeout: true});
                    }
                });

            }

            function chat_delete(id)
            {
                alert(id);
                $.post("./chat.php", {stage: "delete", id: id}, function(data) {
                    //document.getElementById('chat_text').value='';
                    if (data == "good")
                        chat_load();
                    else {
                        alert("No username was found. Please reload chat window");
                        //alert(data);
                    }
                    //$('#chatbox #primary #window').html($('#chatbox #primary #window').text()+data);
                });
            }

            function chat_initial()
            {
                var user = document.getElementById('chat_user').value;
                var pass = document.getElementById('chat_password').value;
                $.post('./chat.php', {stage: "initial", user: user, pass: pass}, function(data) {
                    //alert(data);
                    if (data == "good") {
                        $('#initial').css('display', 'none');
                        $('.register1').css('display', 'none');
                        $('#form').css('display', 'inline');
                        $('#chatbox #primary').css('display', 'inline');
                        $('#summarizer').css('display', 'inline');
                        $('#summarizersup').css('display', 'inline');
                        $('#userlist').css('display', 'inline');
                        $('.panel-primary').css('display', 'block');
                        $('.news').css('display','inline');
                        chat_load();
                        chat_summarize();
                        chat_onlinelist();
                    }
                    else {
                        var n = noty({text: 'Username/Password is incorrect', type: 'error', timeout: true});
                    }
                });
            }

            function chat_send()
            {
                var text = document.getElementById('chat_text').value+".";
                $.post("./chat.php", {stage: "send", text: text}, function(data) {
                    document.getElementById('chat_text').value = '';
                    if (data == "good")
                        chat_load();
                    else {
                        alert("No username was found. Please reload chat window");
                        //alert(data);
                    }
                    //$('#chatbox #primary #window').html($('#chatbox #primary #window').text()+data);
                });
            }

            function chat_load()
            {
                $.post("./chat.php", {stage: "load"}, function(data) {
                    $('#chatbox #primary #window').html(data);
                    setTimeout("chat_load();", 1000 * updateTime);
                });

            }
            function chat_summarize()
            {
                $.post("./chat.php", {stage: "load_for_summary"}, function(data) {
                    $.post("./summarizer/test_summarizer.php", {text: data}, function(data) {
                        $('#summarizer').html(data);
                    });
                    setTimeout("chat_summarizer();", 1000 * 10);
                });

            }

            function chat_logout()
            {
                $.post("./chat.php", {stage: "logout"}, function(data) {
                    if (data == "good") {
                        $('.register1').css('display', 'none');
                        $('#form').css('display', 'none');
                        $('#chatbox #primary').css('display', 'none');
                        $('#summarizer').css('display', 'none');
                        $('#summarizersup').css('display', 'none');
                        $('#userlist').css('display', 'none');
                        $('.panel-primary').css('display', 'none');
                        $('.news').css('display','none');
                        $('#initial').css('display', 'inline');
                    }
                    else
                        alert("Already logout");
                });
            }
            function chat_onlinelist()
            {
                $.post("./chat.php", {stage: "online"}, function(data) {
                    $('#userlistsub').html(data);
                });
                setTimeout("chat_onlinelist();", 1000 * 10);
            }

        </script>
    </body>
</html>
