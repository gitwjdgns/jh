<?php
    include_once "./db_con.php";

    $id= $_POST['id'];
    $pw= password_hash($_POST['pw'], PASSWORD_DEFAULT);

    $result=qe("insert into user(id,pw) values('$id', '$pw')");

    if ($result) {
        echo "<script>alert('Sign up complete!');</script>";
        echo "<script>location.href= 'index.php';</script>";
    } else {
        echo "<script>alert('Failed to sign up.');</script>";
        echo "<script>location.href= 'join.php';</script>";
    }
?>