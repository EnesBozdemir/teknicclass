<?php
    $conn=new mysqli("localhost", "root", "", "teknicclassproje") or die();

    if(isset($_POST["submit"])){
        $username=$_POST["username"];
        $email=$_POST["email"];

        $sql="INSERT INTO `users`(`username`, `email`) VALUES ('$username', '$email')";

        $result=$conn->query($sql);

        header("location:index.html");
    }
?>
