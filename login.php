<?php
include("dbconnect.php");

$un = $_POST['t1'];
$pd = $_POST['t2'];
$c = 0; 

$sql = "SELECT * FROM student"; 
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    if ($row["username"] == $un && $row["password"] == $pd) {
        $c = 1;
        header("location: code_editor.html");
        exit(); 
    }
}

if ($c == 0) {
    echo "Incorrect username and password";
}

mysqli_close($conn);
?>
