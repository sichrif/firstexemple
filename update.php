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

    $update = $bdd->query("UPDATE students SET firstname =' $mfirstname', lastname = '$mlastname' , email = '$memail' WHERE students.id = '$idd'");
    



        ?>
</body>
</html>