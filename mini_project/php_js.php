<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id='head'>hello</h1>
    <?php
        echo "<script> var n=10; document.getElementById('head').innerHTML=n+':'+n;</script>";
        $val= "<script> document.write( document.getElementById('head').innerHTML); </script>";

        echo $val;
    ?>
</body>
</html>