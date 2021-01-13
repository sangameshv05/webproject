<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include "connection.php";



    $query="select * from enrolled where subject_id='$_POST[subject_code]' and test='$_POST[test]';";
    $result=$database->query($query);

    echo "<h1> CLASS RESULT </h1>";
    echo "<h2>SUBJECT CODE: ".$_POST['subject_code']."</h2>";
    echo "<button><a href='teacher.php'>Go Back</a></button>";
    echo "<h2> TEST NUMBER: ".$_POST['test']."</h2>";
    echo "<table border='1px solid black'>";
    echo "<tr><th>USN</th> <th>MARKS</th></tr>";
    
    while($res=$result->fetch_assoc()){
        echo "<tr><td>".$res['usn']."</td><td>".$res['marks']."</td></tr>";
    }
    echo "</table>";

    ?>
</body>
</html>