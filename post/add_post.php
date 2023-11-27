<?php 
require "connexion_post.php";
if(isset($_POST["submit"])){
    $title=$_POST["title"];
    $author=$_POST["author"];
    $description=$_POST["description"];
    $query="INSERT INTO `post`(`title`, `descriptionn`, `author`) VALUES ('$title','$description','$author');";
    $sql_Query_use= mysqli_query($connexion,$query);
    if(isset($sql_Query_use)){
        echo "erroor 1=2";
        header("location:view_post.php?message=the info added to the database");
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
        <label class="form-label" for="form3Example1">Title</label>
        <input type="text" id="form3Example1" class="form-control" name="title"/>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <label class="form-label" for="form3Example2">Author</label>
        <input type="text" id="form3Example2" class="form-control" name="author"/>
      </div>
    </div>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
   <label class="form-label" for="form3Example4">description</label>
    <textarea rows="10" cols="50" type="text" id="form3Example4" class="form-control" name="description"></textarea>
  </div>
  <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-primary btn-block mb-4">submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>