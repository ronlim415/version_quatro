<?php
$comments = $_POST['comments'];


include ("dbconnect.php");

$sql = "INSERT INTO files (comments) values ('$comments')";

$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
header ("location:users_list.php");
?>		
