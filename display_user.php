<?php

include("dbconnect.php");

$sql = "SELECT * FROM student"; 
$result = mysqli_query($conn, $sql);

if ($result) {
    echo mysqli_num_rows($result);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<hr>User: " . $row["username"] . "&nbsp;&nbsp;&nbsp;password: " . $row["password"]."&nbsp;&nbsp;&nbsp;email_id: " . $row["email_id"] ;
        }
    } else {
        echo "0 results";
    }
} else {
    echo "Error in the query: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
