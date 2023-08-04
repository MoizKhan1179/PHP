<?php 

include('conn.php');

$fetch = "SELECT * FROM `b39-11`";

$data = mysqli_query($connection, $fetch);

while($row = mysqli_fetch_assoc($data)){
     echo $row ['name'] . "<br>";
     echo $row ['age'] . "<br>";
     echo $row ['id'] . "<br>";
     echo $row ['gender'] . "<br>";
}



?>