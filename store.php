
<?php


            include 'dbconnexion.php';
            include 'create.php';
            $nb = $bdd->prepare("INSERT INTO students(firstname,lastname,email,phone) VALUES ( :param_firstname,:param_lastname,:param_email,:param_phone)");
            $reponse->bindParam(':param_firstname',$firstname);
            $reponse->bindParam(':param_lastname',$lastname);
            $reponse->bindParam(':param_email',$email);
            $reponse->bindParam(':param_phone',$phone);
            $reponse->execute();
           header("location:index.php");
            echo $nb.' students ajouté avec succés';
 

            


?>
