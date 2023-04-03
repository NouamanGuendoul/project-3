<link rel="stylesheet" href="../navbar/menu.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../main.css?v=<?php echo time(); ?>">

<?php
include "../navbar/menu.html";

try {


  $db = new PDO("mysql:host=localhost;dbname=klanten", "root", "");
  $query = $db->prepare("SELECT * FROM klant");
  $query->execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  
  
  
}  catch(PDOException $e)  {
  //die("Error!: " . $e->message());
}


?>
<div id=Login>
  <div  id= login-form>
    <form action="gebruiker.php" method="POST">
      <label for="fname">naam:</label>
      <input type="text" id="Naam" name="Naam" ><br><br>
      <label for="lname">wachtwoord:</label>
      <input type="password" id="Wachtwoord" name="Wachtwoord"><br><br>

      <input class= "verzend-knop" type="submit" value="verzenden">
    </form>
  </div>
</div>