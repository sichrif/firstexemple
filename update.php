<?php
require 'classes/client.class.php';
$nom=$_POST['firstname'];
$prenom=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$g=new client;
$gg=$g->update($nom,$prenom,$email,$phone,$id);
header('location:mgrclients.php');
