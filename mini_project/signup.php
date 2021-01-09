<?php
    include "connection.php";

    if (isset($_POST['submit'])){
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        $pass = md5($pass);
        $email = $_POST['email'];

        $sql_u = "SELECT * FROM login WHERE user_name='$uname'";
        $res_u = $database->query($sql_u);

        if ($res_u->num_rows > 0){
            echo "<script>
                alert('Sorry... username already taken');
                window.location.href = 'signup.php'
            </script>";
        }else{
            $query = "INSERT INTO login(user_name, password, email) VALUES ('$uname', '$pass', '$email')";  
            $result = $database->query($query);  

            if($result)
            {
                header("location:./login.php"); 
                exit;	
            }
            else
            {
                echo "Something went wrong!"; 
            }
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

    <link href="test.css" rel="stylesheet">
</head>
<body>
    <div class="main h-100 w-100">
        <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="post">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="uname" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <button type="submit" name="submit" class="btn btn-black">Register</button>
                <button type="submit" class="btn btn-secondary"><a class="text-white" href="./login.php">Login</a></button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>