<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Document</title>
    <style>
        p,#submit{
            margin-left: 80px;
        }
        h1,h2{
            text-align: center;
        }
        h4{
            display: inline;
        }
        button{
            margin-left: 50px;
            margin-top: 25px;   
        }
    </style>
</head>
<body class='bg-secondary'>
    
    <?php
        require_once "connection.php";
        $code=$_GET['code'];
        $usn=$_SESSION['usn'];

        $_SESSION['subject_code']=$_GET['code'];

        date_default_timezone_set('Asia/Kolkata');
        $date=date("H:i:s");

        $query="select max(test_num) as num from questions where subject_id='$code'";
        $num=$database->query($query);
        $ans=$num->fetch_assoc();
        $_SESSION['test_num']=$ans['num'];
        $test_num=$_SESSION['test_num'];

        $query="select max(test) as last_test from enrolled where usn='$usn' and subject_id='$code';";
        $last_test=$database->query($query);
        $last_test=$last_test->fetch_assoc();

        if($last_test['last_test']==$test_num){
            echo "<script> alert('No Test Available'); 
                    window.location.href='./student.php';
                </script>";
        }else{

            $datetime="select date,time,duration from test_time where test_number='$_SESSION[test_num]' and subject_code='$code';";
            $res=$database->query($datetime);
            $res=$res->fetch_assoc();
             
            $a=explode(":",$res['time']);
            $b=explode(":",$date);
        
            if(($b[0]>=$a[0] and $b[1] -$a[1]>10) and $res['date']<=date("Y-m-d")){
                echo "<h1>Test already got over </h1>";
            }else if(($b[0]<=$a[0] and $b[1]<$a[1]) and $res['date']>=date("Y-m-d")){
                echo "<h1>Test starts on '$res[date]' at ".date('h:i:s a',strtotime($res['time'])) ."</h1>";
            }
            else if($a[0]==$b[0] and $res['date']==date("Y-m-d")){
                if($b[1]-$a[1]<10 ){
                    
                    $query="select * from questions where subject_id='$code' and test_num='$test_num';";
                    $tests=$database->query($query);
    
                    if ($tests->num_rows > 0){
                        echo "<h4>Time Remaining:</h4> <h4 id='time'></h4>";
                        
                        echo "<script type='text/javascript'>document.getElementById('time').innerHTML='$res[duration]:00';
                                var arr=document.getElementById('time').innerHTML.split(':');
                                var min=parseInt(arr[0]);
                                var sec=0;
                                
                                setInterval(function(){
                                    if(min==0 && sec==0){
                                        document.getElementById('submit').click();
                                    }
                                    if (sec>0){
                                        sec--;
                                        document.getElementById('time').innerHTML=min+':'+sec;
                                    }
                                
                                    else{
                                        min--;
                                        sec=59;
                                        document.getElementById('time').innerHTML=min+':'+sec;          
                                    }
                                },1000)
                            </script>";
                        echo "<h1>Questions</h1>";
                        echo "<form action='submit_answers.php' method='post'";
                            echo "<div>";
                                while($row = $tests->fetch_assoc()){
                                    echo "<p>";
                                        echo "<b>".$row['number'].".".$row['description']."</b><br>";
                                        for($i=1;$i<8;$i++){
                                            if($row['option'.$i]!=null){
                                                echo "<input type=".$row['type']." name=".$row['number']."[]"." value=".$row['option'.$i].">".$row['option'.$i]."<br>";
                                            }else{
                                                break;
                                            }
                                        }                   
                                    echo "</p>";
                                }
                                echo "<input id='submit' class='btn btn-dark' type=submit>";
                            echo "</div>";
                        echo "</form>";
                        }else{
                            echo "<h2> No test Available</h2>";
                        }
                }else{
                    echo "test expired";
                }
            }else{
                echo "<h1>Test already got over </h1>";
            }
        }

    ?>
</body>
</html>