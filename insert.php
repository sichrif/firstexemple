<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div class="container">
<h3>Nouvel étudiant</h3>
<form method="POST" action="store.php">
  <div class="form-group row">
  <div class="col-xs-4">
    <label>first Name</label>
    <input type="text" class="form-control" name="firstname">
  </div>&nbsp; &nbsp;
  <div class="col-xs-4">
    <label>last Name</label>
    <input type="text" class="form-control" name="lastname">
  </div>
  </div>
  <div class="form-group row">
  <div class="col-xs-4">
    <label>Email</label>
    <input type="email" class="form-control" name="email">
  </div>&nbsp; &nbsp;
  <div class="col-xs-4">
    <label>Phone</label>
    <input type="number" class="form-control" name="phone">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>


</body>
</html>