<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
<a href="create.php"><button type="button" class="btn btn-primary active"> Add a new student</button></a>
<table class="table table-bordered" border="0" >
    <tr>
<th>Id</th>
<th>Fname</th>
<th>Lname</th>  
<th>email</th>
<th>email</th>
<th>Actions</th>

</tr>





</div>

<?php
    include 'dbconnexion.php';
    $reponse = $bdd->query('SELECT * FROM students');
while ($donnees = $reponse->fetch())
{
    echo '<tr><td>'.$donnees['id'] . '</td>';
    echo '<td>'.$donnees['firstname'] . '</td>';
    echo '<td>'. $donnees['lastname'] . '</td>';
    echo '<td>'.$donnees['email'] . '</td>';
    echo '<td>'.$donnees['phone'] . '</td>';
    echo '<td> <a href="edit.php"><button type="button" class="btn btn-primary"> edit</button></a> &nbsp;';

    echo '<a href="delete.php?id=<?echo $donnees[id];"><button type="button" class="btn btn-primary">delete</button></a></td></tr>';
}

?>

</table>



</body>
</html>