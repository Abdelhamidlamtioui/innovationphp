<?php $conexion = mysqli_connect("localhost","root","","add_view"); 
  if (isset($conexion)) {
    echo "success";
  }
  else {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }?>