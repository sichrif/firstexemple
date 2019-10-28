<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
</head>
<body>
    
<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=dsi21_g1_2019;charset=utf8', 'root', '');
 } catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
 }
?> 
</body>
</html>