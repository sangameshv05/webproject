<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>answers submitted successfully</h2>
    <?php
        
        require_once "connection.php";

        $code=$_SESSION['subject_code'];
        $test=$_SESSION['test_num'];

        $query="select count(*) as count from questions where subject_id='$code' and test_num='$test';";
        $insert="insert into answers values ('$_SESSION[usn]','$code','$test',?,?);";
        $insert=$database->prepare($insert);
        $insert->bind_param("is",$num,$ans);
        $tot_ques=$database->query($query);
        $tot_ques=$tot_ques->fetch_assoc();

        //echo $tot_ques['count'];
        for ($x = 1; $x <=$tot_ques['count']; $x++) {  
            $num=$x;
            $ans="";      
            foreach($_POST[$x] as $selected){
                $ans=$ans.",".$selected;                
            }
            
            if($insert->execute()){
                header("Location: ./evaluate_answers.php");
            }else{
                echo $database->error;
            }
            
        }
    ?>
</body>
</html>