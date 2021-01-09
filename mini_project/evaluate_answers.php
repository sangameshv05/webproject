<?php
    session_start();
    require_once "connection.php";

    $usn=$_SESSION['usn'];
    $subject_code=$_SESSION['subject_code'];
    $test_num=$_SESSION['test_num'];

    echo $test_num;

    $query="select answer from questions where subject_id='$subject_code' and test_num=$test_num;";
    $c_answers=$database->query($query);
    
    $query="select * from answers where usn='$usn'and subject_code='$subject_code'and test_num=$test_num;";
    $answers=$database->query($query);

    $marks=0;
    while($ans = $answers->fetch_assoc() and $c_ans=$c_answers->fetch_assoc()){
       
        if($ans['s_ans']==$c_ans['answer']){
            
            $marks++;
        }

    }

    $query="insert into enrolled values('$usn','$subject_code','$test_num','$marks');";
    if($database->query($query)){
        header("Location: ./student.php");
    }else{
        echo $database->error;
    }
?>
