<?php
if ($_POST['sb']) {
    $delete_id = $_POST["sid"];
    $con = mysqli_connect('localhost','root','','seu');
    $sql = "DELETE FROM student WHERE id = $delete_id";
    $res = mysqli_query($con,$sql);

    if ($res) {
        echo "<script>alert('Record deleted');</script>";
    } else {
        echo "Error deleting record: ";
    }

    
}
?>
