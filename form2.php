<?php 

include('conn.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Form Validation</h1>
    <form action="form2.php" class="form-group" method="post">
    <div class="container">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control">
        <br>
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control">
        <br>
        <br>
        <br>
        <br>
        <label for="ID">ID</label>
        <input type="number" name="ID" class="form-control">
        <br>
        <br>
        <label for="gender">gender</label>
        <input type="text" name="gender" class="form-control">
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">submit</button>



        
    </form>


    <?php 
    
    if(isset($_POST['submit'])){
           
        $name = $_POST ['name'];
        $age = $_POST ['age'];
        $ID = $_POST ['ID'];
        $gender = $_POST ['gender'];


        $query = "INSERT INTO `b39-11`(`name`, `age`, `id`, `gender`) VALUES ('$name', '$age', '$ID', '$gender')";

        $result = mysqli_query($connection, $query);



    }
    
    ?>

    </div>

</body>
</html>