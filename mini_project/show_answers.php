<?php
    session_start();
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

    <link href="test.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div class="container px-5 mb-5">
    <?php
        require_once "connection.php";
        $usn=$_SESSION['usn'];
        $test=$_GET['test'];
        $subject=$_GET['subject'];

        $query="select que.number, que.description, que.answer, ans.s_ans from questions que, answers ans where ans.usn='$usn' and que.subject_id= '$subject' and ans.subject_code= '$subject' and que.test_num='$test' and ans.test_num='$test' and que.number=ans.question_num;";
        $answer=$database->query($query);

        echo "<h1 class='mt-5'>Answers</h1><hr >";
        while($ans=$answer->fetch_assoc()){
            
            echo "<p class='mb-5'>
                    <h4 class='mb-3'>".$ans['number'].".".$ans['description']."</h4>
                    CORRECT ANSWER: <h5 class='ml-3'>".$ans['answer']."</h5>
                    YOUR ANSWER: <h5 class='ml-3'>".$ans['s_ans']."</h5>
                </p><hr class='border-white'>";
        }
    ?>
    </div>
</body>
</html>