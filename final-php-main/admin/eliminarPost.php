<?php
include('../includes/db.php');
include('../includes/functions.php');
$id = $_GET['id'];

echo  $id;
if(isset($_GET['id']) && !empty($_GET['id'])) {
    header("location:post.php");
    getEliminarPost($id);
}
else{
   echo '<p>No hay información para mostrar</p>';
}

?>