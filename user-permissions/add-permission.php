<?php 
require "connexion-user-permission.php";
if(isset($_POST["submit"])){
    $fullname=$_POST["fullname"];
    $permission=$_POST["permission"];
    $email=$_POST["email"];
    $query="INSERT INTO `permissions`(`fullname`, `permission`, `email`) VALUES ('$fullname','$permission','$email');";
    $sql_Query_use= mysqli_query($connexion,$query);
    if(isset($sql_Query_use)){
      header("location:view-users-permission.php");
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
        <label class="form-label" for="form3Example1">Full Name</label>
        <input type="text" id="form3Example1" class="form-control" name="fullname"/>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <label class="form-label" for="form3Example2">Permission</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Viewer" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Viewer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Editor" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
            Editor
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Admin" id="flexRadioDefault3">
          <label class="form-check-label" for="flexRadioDefault2">
            Admin
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Owner" id="flexRadioDefault4">
          <label class="form-check-label" for="flexRadioDefault2">
            Owner
          </label>
        </div>
      </div>
    </div>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label" for="form3Example3">Email</label>
    <input type="text" id="form3Example3" class="form-control" name="email"/>
  </div>
  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>