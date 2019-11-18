<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <title>Document</title>

</head>
<body>
<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>email</th>
    <th>Phone</th>
 

</tr>











<?php
include 'classes/client.class.php';
$clients= new client;
$listclient= $clients->readAllClients();
while($data=$listclient->fetch()){
    echo '<tr><td>'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '<td><a href="edit.php?id='.$data['id'].'"><i class="fas fa-plus">Editer</i></a>  </td>     ';  
    echo '<td><a href="delete.php?id='.$data['id'].'"><i class="fas fa-minus">Supprimer</i></a></td> </tr>';  


}
?>

</table>

</body>
</html>