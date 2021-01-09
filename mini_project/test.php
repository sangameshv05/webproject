<?php
    session_start();
    require "connection.php";


    $_SESSION['tnum']=$_POST['tnum'];
    $_SESSION['code']=$_POST['code'];
    $code = $_POST['code'];

    $query="insert into test_time values ('$_POST[tnum]','$_POST[code]','$_POST[date]','$_POST[time]','$_POST[duration]');";
    $database->query($query);

    $query = "select * from subjects where subject_id='$code'";
    $subject = $database->query($query);
    
    $subject = $subject->fetch_assoc();
    if($subject['subject_id']){
        header("Location: ./addques.html");
    }else{
        echo "<script>alert('Invalid Test Number Or Subject_Code');
            window.location.href='./test.html';
        </script>";
    }