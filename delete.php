<?php
require 'classes/client.class.php';
$id=$_GET['id'];
$kk = new client;
$ll=$kk->delete($id);
header('location:mgrclients.php');
