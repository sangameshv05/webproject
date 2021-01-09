<?php
    include "./dbconn.php";

    if(isset($_POST['submit']))
    {
        $query = "SELECT * FROM questions ORDER BY number DESC  ";  
        $result = mysqli_query($connect, $query) or die( mysqli_error($connect));  
        while($row = mysqli_fetch_array($result))  
        {
            $skill=$_POST[$row["number"]];
            echo $skill;echo '<br>';
            $sql =mysqli_query($connect, " INSERT into ans(usn, sub_code, test_no, q_no, s_answer, c_answer) VALUES(1, '1a', 1, $row[number], $skill, 1)");
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="exam.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="main h-100 w-100">
        <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form name="add_name" id="add_name" method="post">
                <div class="form-group">
                    <p class="form-control" rows="5" ></p>
                </div>
                <div class="container1 form-group">
                    <label>Options</label>
                    <div><input type="text" name="mytext[]" class="form-control" placeholder="Fill me"></div>
                </div>
                

                <?php  
                    $query = "SELECT * FROM questions ORDER BY number DESC  ";  
                    $result = mysqli_query($connect, $query) or die( mysqli_error($connect));  
                    while($row = mysqli_fetch_array($result))  
                    {  
                        echo ' 
                            <h3>'.$row["description"].'</h3>
                            <div class="form-group"> 
                                <ol>
                                    <li>
                                        <input type="radio" name="'.$row["number"].'" value="1" />'.$row["option1"].'
                                    </li>';if($row["option2"]!=NULL){echo'
                                    <li>
                                        <input type="radio" name="'.$row["number"].'" value="2" />'.$row["option2"].'
                                    </li>';}if($row["option3"]!=NULL){echo'
                                    <li>
                                        <input type="radio" name="'.$row["number"].'" value="3" />'.$row["option3"].'
                                    </li>';}if($row["option4"]!=NULL){echo'
                                    <li>
                                        <input type="radio" name="'.$row["number"].'" value="4" />'.$row["option4"].'
                                    </li>';}if($row["option5"]!=NULL){echo'
                                    <li>
                                        <input type="radio" name="'.$row["number"].'" value="5" />'.$row["option5"].'
                                    </li>';}if($row["option6"]!=NULL){echo'
                                    <li>
                                        <input type="radio" name="'.$row["number"].'" value="6" />'.$row["option6"].'
                                    </li>';}if($row["option7"]!=NULL){echo'
                                    <li>
                                        <input type="radio" name="'.$row["number"].'" value="7" />'.$row["option7"].'
                                    </li>';}echo'
                                </ol>
                            </div>
                        ';
                    }
                ?>

                <button type="submit" name="submit" id="submit" value="submit" class="btn btn-black">Done</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>