<?php
    require_once "connection.php";

    date_default_timezone_set('Asia/Kolkata');
    $date=date("H:i:s");

    $query="select * from test_time";
    $res=$database->query($query);

    
    
    while($r = $res->fetch_assoc()){
        $a=explode(":",$r['time']);
        $b=explode(":",$date);

        echo $a[0]."<br>";
        echo $r['date']."<br>";
        echo $r['time']."<br>";

        if($r['date']==date("Y-m-d"))
            echo "same";
    }
    