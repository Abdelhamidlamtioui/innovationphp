<?php 
    require "connexion_post.php";
    $id=$_GET['id'];
    $query="DELETE FROM `post` WHERE id=$id";
    $query_requet = mysqli_query($connexion,$query);
    if(isset ($query_requet)){
        header("location:view_post.php");
    }
    else{
        echo "error";
    }
    
?>