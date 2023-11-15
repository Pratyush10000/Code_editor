<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$em=$_POST['t3'];
$mb=$_POST['t4'];

$servername="localhost";
$username= "root";
$password= "";
$dbname= "abes_cs_b";
$conn = new mysqli($servername, $username, $password,$dbname);
$sql="insert into student values('$un','$pd','$em','$mb')";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "Records Inserted";
}
else {
  echo "No Records Inserted";
}
?>