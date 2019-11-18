<?php
require 'classes/client.class.php';
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'] ;
$email=$_POST['email'];
$phone=$_POST['phone'];
$aa=new client;
$bb=$aa->addclient($firstname,$lastname,$email,$phone);
header('location:mgrclients.php');

 