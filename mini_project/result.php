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
        h1,tr,th{
            text-align: center;
        }
        body{
            text-transform: uppercase;
        }
        table{
            margin: 50px;
            
        }
        h1{
            margin: 25px; 
        }
        button{
            margin-top: 25px;   
        }
    </style>
</head>
<body class="bg-secondary">
    <div class="container">
        <button class="btn btn-dark"><a href="student.php">Back</a></button>
        <h1>Test Results</h1>
      
        <?php
            
            require_once "connection.php";

            $usn=$_SESSION['usn'];

            $query="select subject_id from enrolled where usn='$usn' group by subject_id;";
            $subject_ids=$database->query($query);
            
            $query="select test,marks from enrolled where usn='$usn' and subject_id=?;";
            $marks=$database->prepare($query);
            $marks->bind_param("s",$subject);

            $total_ques = "select count(*) as total from questions where test_num=? and subject_id=?";
            $total_ques = $database->prepare($total_ques);
            $total_ques->bind_param('ss', $test, $subject);
            
            if ($subject_ids->num_rows > 0) {

            
                while($subject_id=$subject_ids->fetch_assoc()){
                    if($subject_id['subject_id']){

                    
                        $subject=$subject_id['subject_id'];
            
                        $marks->execute();
                        $result=$marks->get_result();

                        echo "<table class='table table-dark table-striped table-hover'>";
                            
                            echo "<tr> <th colspan=3>".$subject."</th> </tr>";

                            echo "<tr> 
                                    <td> Test Number </td> 
                                    <td> Marks Obtained </td> 
                                    <td> Check Answers </td>
                                </tr>";
                            while($res=$result->fetch_assoc()){
                                $test = $res['test'];
                                $total_ques->execute();
                                $total=$total_ques->get_result();
                                $total = $total->fetch_assoc();

                                echo "<tr> 
                                        <td>".$res['test']."</td>
                                        <td>".$res['marks']."/".$total['total']."</td> 
                                        <td> <a href=show_answers.php?test=".$res['test']."&subject=".$subject."> Answers </a></td>
                                    </tr>";
                            }
                            
                        echo "</table>";
                    }
                }      
            }else{
                echo "<h1> You have not taken any tests, yet</h1>";
            }    
        ?>
    
    </div>
</body>
</html>