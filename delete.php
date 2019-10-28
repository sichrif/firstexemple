<?php
include 'dbconnexion.php';
$delete = $bdd->query("DELETE FROM students  WHERE students.id =id");
?>