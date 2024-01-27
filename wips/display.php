
	<h3 align="center">Display User Information</h3>
         <table border="1" align="center">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
			</tr>
	<tbody>
<?php
$con=mysqli_connect('localhost','root','','seu');
$sql = "SELECT * FROM student";
$res = mysqli_query($con,$sql);
while ($row = mysqli_fetch_assoc($res)) {
	echo"<tr align='center'>";
	echo"<td>{$row["id"]}</td>";
	echo"<td>{$row["name"]}</td>";
	echo"<td>{$row["age"]}</td>";
	echo"</tr>";	
}
?>
</tbody>
	</table>
	  
