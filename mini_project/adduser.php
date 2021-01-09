<?php
    require "connection.php";

    $id=$_POST['id'];
    $name=$_POST['name'];
    $role=$_POST['role'];
    $sem=$_POST['sem'];
    $password=$_POST['password'];

    $insert="insert into users values ('$id','$name','$role',$sem,'$password');";
    
    if($database->query($insert))
    {
        
        header("Location: ./login.html");
    }
    else{
        echo "error";
    }