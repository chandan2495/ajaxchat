<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("AJAX_CHAT");
$stage=$_POST['stage'];

if($stage=="check")
{
    if(isset($_SESSION['user']))
    {
        echo "login";
        exit();
    }
 else {
    echo "logout";
    exit();
    }
}


if($stage=="register")
{
    $user=$_POST['user'];
    $password=$_POST['pass'];
    $email=$_POST['email'];
    $query1=  mysql_query("select * from chat_users where user='$user'");
    if(mysql_num_rows($query1)>0){
    echo "taken";
    exit();
    }
    else{
    if(mysql_num_rows($query1)==0){
        $time=time();
        $query1=mysql_query("insert into chat_users values(NULL,'$user','$password','$email','user')");    
        echo "good";
        exit();
        
    }
    }
}

if($stage=="initial")
{
    $user=$_POST['user'];
    $password=$_POST['pass'];
    $query1=  mysql_query("select * from chat_users where user='$user' and password='$password'");
    if(mysql_num_rows($query1)>0){
        $row= mysql_fetch_assoc($query1);
        $id=$row['userid'];
    $query=  mysql_query("select * from chat_active where user='$user'");
    if(mysql_num_rows($query)==0){
        $time=time();
        $query1=mysql_query("insert into chat_active values('$user','$time','$id')");
        $_SESSION['user']=$user;
        $_SESSION['lastmsgid']=0;
        
        echo "good";
    exit();
    }
    
    else {
        echo "bad";
        exit();
    }
    }
    else
        echo "Not registered yet";
}


if($stage=="logout")
{
    $user=$_SESSION['user'];
    $_SESSION=array();
    $query=  mysql_query("select * from chat_active where user='$user'");
    if(mysql_num_rows($query)>0){
        $query1=mysql_query("delete from chat_active where user='$user'");
        echo "good";
    exit();
    }
    
    else {
        echo "bad";
        exit();
    }
}

else if($stage=="send")
{
    $text=$_POST['text'];
    if(isset($_SESSION['user']))     {
    $user=$_SESSION['user'];
    
    $time=time();
    mysql_query("insert into chat_chats values(NULL,'$user','$time','$text')");
    echo "good";
    exit();
    }
    else{
        echo "nouser";
        exit();
    }
}

else if($stage=="delete")
{
    $id=$_POST['id'];
    if(isset($_SESSION['user']))     {
    $user=$_SESSION['user'];

    $query=mysql_query("delete from chat_chats where id='$id'");
    echo "good";
    exit();
    }
    else{
        echo "nouser";
        exit();
    }
}

else if($stage=="load")
{
    $num=1;
    $query=mysql_query("select * from chat_chats");
    if(mysql_num_rows($query)>0){
        while($row= mysql_fetch_assoc($query)){
            $user=$row['user'];
            $time=$row['time'];
            $content=$row['text'];
            $id=$row['id'];
            
            $content=  htmlentities($content);
            echo '<div class="list'.$num.'">';
            echo '<span class="glyphicon glyphicon-user user"></span><b>'.$user.'</b> at <u>'.date("M d Y",$time).'</u> - <span data-wiki="'.$content.'">'.$content.'</span>';
            echo '<a href="#" class="delete" onClick="chat_delete('.$id.')"><span class="glyphicon glyphicon-remove delete1"></span></a>';
            echo '</div>';
            
            if($num==1)
                $num=2;
            else 
                $num=1;
        }
    }
    exit();
}

else if($stage=="load_for_summary")
{
    $content="";
    $query=mysql_query("select * from chat_chats");
    if(mysql_num_rows($query)>0){
        while($row= mysql_fetch_assoc($query)){
            $content=$content." ".$row['text'];
        }
    }
    echo $content;
    exit();
}

else if($stage=="online")
{
    $content="";
    $query=mysql_query("select * from chat_active");
    if(mysql_num_rows($query)>0){
        echo '<ul>';
        while($row= mysql_fetch_assoc($query)){
            echo '<li><a href="#">'.$row['user'].'</a></li>';
        }
        echo '</ul>';
    }
    else
    {
        echo "bad";
     exit();   
    }
}



else
    echo "error";
?>

