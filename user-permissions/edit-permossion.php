<?php 
require "connexion-user-permission.php";
$id = $_GET['id'];
$query="SELECT * FROM `permissions` WHERE id=$id;";
$query_use= mysqli_query($connexion,$query);
$info_in_table= mysqli_fetch_assoc($query_use);
$view_Checked=0;
$editor_Checked=0;
$admin_Checked=0;
$owner_Checked=0;
if($info_in_table['permission']==="Viewer"){
$view_Checked="checked";
}
elseif ($info_in_table['permission']==="Editor") {
$editor_Checked="checked";
}
elseif ($info_in_table['permission']==="Admin") {
$admin_Checked="checked";
}
elseif ($info_in_table['permission']==="Owner") {
$owner_Checked="checked";
}
if(isset($_POST["submit"])){
    $fullname=$_POST["fullname"];
    $permission=$_POST["permission"];
    $email=$_POST["email"];
    $query="UPDATE `permissions` SET `fullname`='$fullname',`permission`='$permission',`email`='$email' WHERE id=$id;";
    $query_active= mysqli_query($connexion,$query);
    if(isset($query_active)){
        header("location:view-users-permission.php");
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
        <label class="form-label" for="form3Example1">Full Name</label>
        <input type="text" id="form3Example1" class="form-control" name="fullname" value="<?php echo $info_in_table["fullname"]; ?>"/>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <label class="form-label" for="form3Example2">Permission</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Viewer" id="flexRadioDefault1" <?php echo $view_Checked; ?>>
          <label class="form-check-label" for="flexRadioDefault1">
            Viewer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Editor" id="flexRadioDefault2" <?php echo $editor_Checked; ?>>
          <label class="form-check-label" for="flexRadioDefault2">
            Editor
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Admin" id="flexRadioDefault3" <?php echo $admin_Checked; ?>>
          <label class="form-check-label" for="flexRadioDefault2">
            Admin
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="permission" value="Owner" id="flexRadioDefault4" <?php echo $owner_Checked; ?>>
          <label class="form-check-label" for="flexRadioDefault2">
            Owner
          </label>
        </div>
      </div>
    </div>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <label class="form-label" for="form3Example3">Email</label>
    <input type="text" id="form3Example3" class="form-control" name="email" value="<?php echo $info_in_table["email"]; ?>"/>
  </div>
  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>