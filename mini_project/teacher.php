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

    <title>Teacher</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Welcome <?php echo $_SESSION['name']; ?></h1>
        <button><a href="test.html">Add Test</a></button>
        <button>Next Test</button>
        <button>Class Result</button>
        <button><a href="logout.php">Logout</a></button>
        <div class="login-form">
            <form id="form" action="classresult.php" method="POST">
                
                <div class="form-group">
                <label for="test">TEST NUMBER: </label>
                <input type="text" name="test" >
                </div>
                <div class="form-group">
                <label for="subject_code">SUBJECT CODE</label>
                <input type="text" name="subject_code">
                </div>
                <div class="form-group">
                <input type="submit" value="submit">
                </div>
            </form>
        </div>    
    </div>
</body>
</html>