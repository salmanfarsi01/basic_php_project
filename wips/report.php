<!DOCTYPE html>
<html lang="en">
<head>
	<title>Report</title>
</head>
<body>
	<h2 align="center">Find your information by age filter</h2>
	<form action="" method="POST" align="center">
		From Age: <input type="number" name="range1"> &nbsp;
		To Age: <input type="number" name="range2">
		<button type="submit">Search</button>
	</form>
	<div>
		<h3 align="center">User Information</h3>
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
			</tr>
			<tbody>
				<?php
				$con=mysqli_connect('localhost','root','','seu');
                

                if(isset($_POST['range1']) && isset($_POST['range2'])){
                
                $min = $_POST['range1'];
                $max = $_POST['range2'];
                $sql = "SELECT * FROM student WHERE age BETWEEN $min AND $max";
                }
                else{
                $min = '';
                $max = '';
                $sql = "SELECT * FROM student ORDER BY id asc";
                }

                $res = mysqli_query($con,$sql);
                

                if(mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_assoc($res)){
                 echo"<tr>
                    <td align='center'>{$row["id"]}</td>
                    <td>{$row["name"]}</td>
                    <td align='center'>{$row["age"]}</td>
                    
                  </tr>";
            }

  
      }else{
       echo "<h2>No Record Found.</h2>";
    
        }
				?>
			</tbody>
		</table>
	</div>
</body>
</html>