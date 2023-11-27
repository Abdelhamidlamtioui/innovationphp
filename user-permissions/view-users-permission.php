<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Counter</title>
</head>

<body class="container">
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php 
require "connexion-user-permission.php";
?>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Full Name</th>
        <th scope="col">Permission</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $request = "SELECT permissions.id ,permissions.fullname AS permission_Fullname, permissions.permission, permissions.email, userinfo.phonenumber, userinfo.firstname AS userinfo_Firstname  FROM `permissions` RIGHT JOIN `userinfo` ON permissions.fullname=userinfo.firstname ;";
        $query = mysqli_query($connexion , $request);
        while ($data= mysqli_fetch_assoc($query)) :?>
        <tr>
          <th scope="row"><?php echo $data['id']; ?></th>
          <td><?php echo $data['permission_Fullname']; ?></td>
          <td><?php echo $data['permission']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><?php if ($data['userinfo_Firstname']===$data['permission_Fullname']) {
            echo $data['phonenumber'];
          }else {
            break;
          } ?></td>
          <td><a class="btn btn-danger" href="delete-user.php?id=<?php echo $data['id']?>">Delete</a></td>
          <td><a class="btn btn-success" href="edit-permossion.php?id=<?php echo $data['id'] ?>">Edit</a></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <div>
    <a class="btn btn-dark" href="add-permission.php">Add permission</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>