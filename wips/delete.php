<form method="POST" action="dexecute.php" align="center">
    Select ID to Delete: <select name="sid">
        
        <?php

        $con = mysqli_connect('localhost','root','','seu');
        $sql = "SELECT id FROM student";
        $res = mysqli_query($con,$sql);

        while ($row = mysqli_fetch_assoc($res)) {
            echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
            }
        ?>
    </select>
    <input type="submit" name="sb">
</form>
