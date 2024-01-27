<?php

$con=mysqli_connect('localhost','root','','seu');
echo "<h3 align=center>Edit or Update your infromation</h3><br>";
$id= $_GET['id'];
$sql = "SELECT * FROM student where id= '$id'";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res); 


?>
<html>
<body>
<form name="rf" action="" method="post" align= "center">
Student ID: <input type="text" value="<?php echo $row['id'];?>" name="sid"><br><br>
Student Name: <input type="text" value="<?php echo $row['name'];?>" name="sn"><br><br>
Student Age: <input type="text" value="<?php echo $row['age'];?>" name="sa"><br><br>
<input type="submit" name="sb" value="update">


</form>

<table border="1" align="center">
	<tbody>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Age</th>
		</tr>
<?php
$con=mysqli_connect('localhost','root','','seu');

if (isset($_POST['sb'])) {
$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa'];

$sql = "UPDATE student set id='$id',name='$name',age='$age' WHERE id='$id'";
$res = mysqli_query($con,$sql);

if ($res) {
	echo "<h2 align=center>Record Updated</h2><br>";
	echo "<tr>";
	echo "<td>$id</td>";
    echo "<td>$name</td>";
    echo "<td>$age</td>";
    echo "</tr>";
}
else{
	echo "<h2 align=center>failed</h2>";
}

}

?>
</tbody>
</table>
</body>
</html>