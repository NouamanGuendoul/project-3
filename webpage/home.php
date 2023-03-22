<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php include 'menu.php';
try {


  $db = new PDO("mysql:host=localhost;dbname=klanten", "root", "");
  $query = $db->prepare("SELECT * FROM klant");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  
  
  
}  catch(PDOException $e)  {
  //die("Error!: " . $e->message());
}


?>
<form action="gebruiker.php" method="POST">
  <label for="fname">naam:</label>
  <input type="text" id="Naam" name="Naam" ><br><br>
  <label for="lname">wachtwoord:</label>
  <input type="text" id="Wachtwoord" name="Wachtwoord"><br><br>

  <input type="submit" value="verzenden">
</form>



 
</body>
</html>