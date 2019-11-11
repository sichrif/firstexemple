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
<form action="update.php" method="post" accept-charset="utf-8">
        <label>Id<input type="text" name="idd"></label><br>
        <label>firstname<input type="text" name="firstname"></label><br>
         <label>lastname<input type="text" name="lastname"></label><br>
         <label>email<input type="text" name="email"></label><br>
         <label>phone<input type="number"name="phone" value=""></label><br>
         <input type="submit" value="Modifier">
     </form>
    
  <?php
        if (!empty($_POST)) {
          $idd = $_POST['idd'];
          $mfirstname = $_POST['firstname'];
          $mlastname = $_POST['lastname'];
          $memail = $_POST['email'];
          $mphone = $_POST['phone'];
      }
  ?>

</body>
</html>