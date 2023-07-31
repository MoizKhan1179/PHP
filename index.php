<?php 

echo "Hello PHP <br> ";


//Multidimensional Array--- 


// $marks = [
//     [36,59,68,26],
//     [25,36,85,45],
//     [45,85,26,45]    
// ];

// print_r ("$marks <br>");

// foreach(
//     $marks as $v
// ){
//     foreach  ($v as $e){
//         echo "$e <br>";
//     }
// };

// $cars = [
//     "Honda" => ["Accord" => "$1200000/-", "Civic" => "$10000000/- "],
//     "Toyota" => ["Supra" => "$60000000/-", "Camery" => "$45000000/-" ]
// ];

// foreach ($cars as $k => $val){
//     // echo ("$k <br>");
//     foreach ($val as $v => $P){
//         echo "$v = $P <br>";
//     }
    
// }

// $marks1 = [
//     "Mosa" => ["Maths" => 89, "English" => 75, "Urdu" => 75],
//     "Abdul Moiz" => ["Maths" => 90, "English" => 69, "Urdu" => 70] 
// ];

// foreach ( $marks1 as $m => $a){
//     echo "$m <br>";
//     foreach ($a as $ma => $eng){
//         echo "  <br> $ma=$eng <br>";
//     }
// }

// scope of a function---

$fname = "Mosa";

function getFullName(){
    global $fname;
    $lname = "Khan";
    echo "$fname . $lname <br>";
}
getFullName();

?>