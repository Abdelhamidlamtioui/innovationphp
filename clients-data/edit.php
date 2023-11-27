<?php 
require "connexion.php";
$id = $_GET['id'];
$query="SELECT * FROM `userinfo` WHERE id=$id;";
$query_use= mysqli_query($conexion,$query);
$info_in_table= mysqli_fetch_assoc($query_use);
if(isset($_POST["submit"])){
    $fistname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $age=$_POST["age"];
    $phonenumber=$_POST["phonenumber"];
    $query="UPDATE `userinfo` SET `firstname`='$fistname',`lastname`='$lastname',`age`='$age',`phonenumber`='$phonenumber' WHERE id=$id;";
    $query_active= mysqli_query($conexion,$query);
    if(isset($query_active)){
        header("location:first.php?message=the info updated to the database");
      }
      else{
        echo "erroor 1";
      }
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
        <input type="text" id="form3Example1" class="form-control" name="firstname" value="<?php echo $info_in_table['firstname'];?>"/>
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" name="lastname" value="<?php echo $info_in_table['lastname'];?>" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form3Example3" class="form-control" name="age" value="<?php echo $info_in_table['age'];?>" />
    <label class="form-label" for="form3Example3">age</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form3Example4" class="form-control" name="phonenumber" value="<?php echo $info_in_table['phonenumber'];?>" />
    <label class="form-label" for="form3Example4">number</label>
  </div>
  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>