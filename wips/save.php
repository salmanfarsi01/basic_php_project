<?php

$con=mysqli_connect('localhost','root','','seu');
echo "Store user infromation<br>";
$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa'];

$sql="INSERT INTO student(id,name,age)values('$id','$name','$age')";
mysqli_query($con,$sql);

echo $id;
echo"<br>";
echo $name;
echo"<br>";
echo $age;

?>