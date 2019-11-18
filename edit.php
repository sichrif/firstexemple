<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
include 'classes/client.class.php';
$db=new dbconnection;
$cnnx=$db->connecta();
$reponse=$cnnx->prepare('SELECT * FROM students WHERE id =:param_id');
 $reponse->bindParam(':param_id', $_GET['id']); 
 $reponse->execute();  
 $donnees = $reponse->fetch();
?>

<div class="container">
<h3>Editer étudiant</h3>
<form method="POST" action="update.php">
<div class="form-group">
    <input type="number" class="form-control" name="id" value="<?php echo $donnees['id']?>"hidden>
  </div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label>First Name</label>
    <input type="text" class="form-control" name="firstname" value="<?php echo $donnees['firstname']?>">
    </div>&nbsp; &nbsp;
    <div class="col-xs-4">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lastname" value="<?php echo $donnees['lastname']?>">
    </div>
</div>
  <div class="form-group row">
    <div class="col-xs-4">
    <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $donnees['email']?>">
    </div>&nbsp; &nbsp;
    <div class="col-xs-4">
    <label>Phone</label>
    <input type="number" class="form-control" name="phone" value="<?php echo $donnees['phone']?>">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">enregistrer</button>
  <button class="btn  btn-secondary">Annuler</button>
</form>
</div>
</body>
</html>
