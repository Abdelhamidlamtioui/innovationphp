<?php 
    require "connexion-user-permission.php";
    $id=$_GET['id'];
    $query="DELETE FROM `permissions` WHERE id=$id";
    $query_requet = mysqli_query($connexion,$query);
    if(isset ($query_requet)){
        header("location:view-users-permission.php");
    }
    else{
        echo "error";
    }
    
?>