<link rel="stylesheet" href="./navbar/menu.css?v=<?php echo time(); ?>">

<body>
    
    <nav> 
        <ul id="nav-list">
            <li id="logo-li"><a href="./home.php"><img src="./img/dol.com-logo.png" alt="logo"  id="logo-img"></a></li>
            <li class="nav-li"><a href="./producten/producten.php">Producten</a></li>
            <li class="nav-li"><a href="./medewerkers/medewerkers.php">Over Ons</a></li>
            <li class="nav-li"><a href="./geschiedenis/geschiedenis.php">Geschiedenis</a></li>
            <li class="nav-li"><a href="./eco-vriendelijkheid/eco-vriendelijkheid.php">Eco</a></li>
            <li class="nav-li"><a href="./klachten/klachten.php">Klachten</a></li>
        </ul>
      
    </nav>

    <footer id="footerbalk">Footer Container</footer>

</body>

<?php
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
