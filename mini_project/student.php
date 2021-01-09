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

        <style>
            body{
                text-transform: uppercase;
            }
            table{
                margin: 50px;
               
            }
            h1,button{
                margin: 25px; 
            }
            h4{
                margin-left: 90%;
            }
        </style>
        
    </head>
    <body class="bg-secondary">
        <div class="container  pt-3">
            <h4 class="btn btn-dark"><a href="logout.php">Logout</a></h4>
            <h1 style="text-align: center;">Welcome <?php echo $_SESSION['name']; ?></h1>
            <?php
                require "connection.php";

                $usn=$_SESSION['usn'];
                $query="select subject_id,subject_name from subjects where sem = (select sem from users where id='$usn');";
                $execute=$database->query($query);
                
                if ($execute->num_rows > 0) {
                // output data of each row
            ?>
                    
                    <table class='table table-striped table-hover table-dark'>
                        <tr>
                            <th>SUBJECT CODE</th>
                            <th>SUBJECT NAME</th>
                            <th>TEST</th>
                        </tr>
                    
                    <?php while($row = $execute->fetch_assoc()) {?>
                        <tr>
                            <td><?php echo $row['subject_id']?></td>
                            <td><?php echo $row['subject_name'] ?></td>
                            <td><a href=check_test.php?code=<?php echo $row['subject_id']?> >Take Test</a></td>
                        </tr>
                    <?php } ?>
                    </table>                
                <?php } ?>               
            
            <button class="btn btn-dark" style="margin-left: 45%;"><a href='result.php'>CHECK RESULT</a></button>
            
        </div>
    </body>
</html>