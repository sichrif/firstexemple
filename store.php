
<?php


            include 'dbconnexion.php';
            include 'create.php';
            $nb = $bdd->exec("INSERT INTO students(firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')");

            echo $nb.' students ajouté avec succés';
 

            header('Location: http://localhost/chrif/');


?>
