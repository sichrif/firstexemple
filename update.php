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
    include 'dbconnexion.php';
    include 'edit.php';

    $update = $bdd->prepare("UPDATE students SET firstname=:param_firstname,lastname=:param_lastname,email=:param_email,phone=:param_phone where id=:param_id");
    
    $reponse->bindParam(':param_firstname',$mfirstname);
    $reponse->bindParam(':param_lastname',$mlastname);
    $reponse->bindParam(':param_email',$memail);
    $reponse->bindParam(':param_phone',$mphone);
    $reponse->bindParam(':param_id',$idd);
    $reponse->execute(); 
     header("location:index.php");


        ?>
</body>
</html>