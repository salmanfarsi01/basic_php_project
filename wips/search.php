<!DOCTYPE html>
<html>
<head>
	<title>Search By name</title>
</head>
<body>
<h3 align="center">Search By Name</h3>
<form method="post" align="center">
Search: <input type="text" name="sn">
<input type="submit" name="sb">
	
</form> <br>
         <table border="1" align="center">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
			</tr>
	<tbody>


<?php

$con=mysqli_connect('localhost','root','','seu');

if (isset($_POST["sb"])) {
	$str = $_POST["sn"];
	$sql= "SELECT * FROM `student` WHERE Name = '$str'";
	$res = mysqli_query($con,$sql);
	if($row = mysqli_fetch_assoc($res))
	{
		
		
	echo"<tr align='center'>";
	echo"<td>{$row["id"]}</td>";
	echo"<td>{$row["name"]}</td>";
	echo"<td>{$row["age"]}</td>";
	echo "</tr>";

	}
		
		else{
			echo "<script>alert('Invalid input!!')</script>";
		}
      }
?>

</tbody>
	</table>
</body>
</html>