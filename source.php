<?php

mysql_connect("localhost","root","");
mysql_select_db("AJAX_CHAT");

    
    $sql=  mysql_query("select * from auto_suggest");
    $array="";
    
    while($row=mysql_fetch_assoc($sql))
    {
        $array=$array.$row['text']."\n";
    }
    echo json_encode($array);
    
?>
