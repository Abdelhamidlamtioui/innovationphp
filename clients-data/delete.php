<?php 
    require "connexion.php";
    $id=$_GET['id'];
    $query="DELETE FROM `userinfo` WHERE id=$id";
    $query_requet = mysqli_query($conexion,$query);
    if(isset ($query_requet)){
        header("location:first.php?");
    }
    else{
        echo "error";
    }
    
?>