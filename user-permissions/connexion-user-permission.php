<?php $connexion = mysqli_connect("localhost","root","","add_view"); 
  if (isset($connexion)) {
    echo "success";
  }
  else {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }?>