<?php
include 'dbconnexion.php' ;
$reponse=$cnx->prepare('DELETE FROM students WHERE id =:param_id');
$reponse->bindParam(':param_id',$_GET['id']);
$reponse->execute();
header('location:index.php');
?>