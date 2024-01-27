<?php

$con = mysqli_connect('localhost','root','','seu');

    $username = $_POST["sn"];
    $password = $_POST["sa"];

    $sql = "SELECT * FROM student WHERE name = '$username' AND age = '$password'";
    $res = mysqli_query($con,$sql);

    if ($row = mysqli_fetch_assoc($res)) {
        $user = $row;
        $name = $user["name"];
        $age = $user["age"];
        echo "<h1 align=center>Welcome to your login panel!!</h1><br>";
        echo "<h3 align=center><b>Name: $name</b></h3>";
        echo "<h3 align=center><b>Age: $age</b></h3><br>";
    } else {
        
        echo "<script>alert('Invalid username or password!!')</script>";
    }

?>
