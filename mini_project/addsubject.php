<?php
    require "connection.php";

    $id=$_POST['id'];
    $name=$_POST['name'];
    $sem=$_POST['sem'];

    echo $id;
    echo $name;
    echo $sem;
    $query="insert into subjects values('$id','$name',$sem);";

    if($database->query($query))
    {
        header("Location: ./adduser.html");
    }
    else{
        echo "error";
    }