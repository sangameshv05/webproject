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
    <?php 
        
        require_once "connection.php";
        
        $uname=$_POST['uname'];
        $password=$_POST["password"];

        echo $password;
        if($password == "admin"){
            echo "hi";
            $_SESSION['name'] = $_POST['uname'];
            $_SESSION['temp'] = TRUE;
            header("location:./adduser.html");
        }else{
            

        $check="select * from users where id= '$uname' and password='$password';";

        
        $result=$database->query($check);
        $info=$result->fetch_assoc();
        $_SESSION["name"]=$info['name'];
        $_SESSION['usn']=$uname;
        if($result->num_rows>0)
        {
            $_SESSION['temp']=true;
            if($info['role']=='student'){
                //echo $_SESSION['name'];
                $_SESSION['name']=$info['name'];
                header("Location: ./student.php");
            }
            else if($info['role']=='teacher'){
                header("Location: ./test.html");
            }
            else if($info['role']=='admin'){
                header('Location: ./admin.html');
            }
            
        }
        else
        {   
            header("Location: ./login.html");
        }
    }
    ?>
    
</body>
</html>

    