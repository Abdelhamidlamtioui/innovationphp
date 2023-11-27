<?php 
require "connexion.php";
if(isset($_POST["submit"])){
    $fist_name=$_POST["first_Name"];
    $last_name=$_POST["last_Name"];
    $age=$_POST["age"];
    $phone_number=$_POST["phone_Number"];
    $query="INSERT INTO `userinfo`(`firstname`, `lastname`, `age`, `phonenumber`) VALUES ('$fist_name','$last_name','$age','$phone_number');";
    $sql_Query_use= mysqli_query($conexion,$query);
    if(isset($sql_Query_use)){
      header("location:first.php?message=the info added to the database");
    }
    else{
      echo "erroor 1";
    }
}
else{
  echo "error 0";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="d-flex mt-5">
<form class="container mt-5" method="POST">
  <div class="row mb-4 mt-5">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example1" class="form-control" name="first_Name"/>
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" name="last_Name"/>
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- age input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form3Example3" class="form-control" name="age"/>
    <label class="form-label" for="form3Example3">age</label>
  </div>

  <!-- Phone number input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form3Example4" class="form-control" name="phone_Number"/>
    <label class="form-label" for="form3Example4">number</label>
  </div>
  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>