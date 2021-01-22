<?php
require_once "db_connection.php";

$sql = mysqli_query($conn, "select * from users;");

while($row = mysqli_fetch_assoc($sql))
{
    //print_r($row);
    echo "Name: ".$row['name']." and Email: ".$row['email']."<br/>";
}


?>