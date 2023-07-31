<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h1>Form Validation</h1>
    <form action="data.php" class="form-group" method="post">
    <div class="container">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control">
        <br>
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" class="form-control">
        <br>
        <br>
        <label for="gender">gender</label>
        <input type="text" name="gender" class="form-control">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">submit</button>



        
    </form>


    <?php 
    
    if(isset($_POST['submit'])){
        echo $_POST['name'] . "<br>";
        echo $_POST['age'] . "<br>";
        echo $_POST['gender'] . "<br>";
        

    };
    
    ?>
    </div>


    


</body>
</html>