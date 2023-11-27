<?php 
$connexion= mysqli_connect("localhost","root","","add_view");
if(isset($connexion)){
    echo "sucess";
}
else{
    echo "error";
}
?>