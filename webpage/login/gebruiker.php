<link rel="stylesheet" href="../navbar/menu.css?v=<?php echo time(); ?>">


<?php include '../navbar/menu.html';
$naam=$_POST['Naam'];
$wachtwoord=$_POST['Wachtwoord'];
 $db = new PDO("mysql:host=localhost;dbname=klanten", "root", "");
$query = $db->prepare("INSERT INTO klant(Naam ,wachtwoord)
VALUES(:naam , :wachtwoord  ) ");
$query->bindparam("naam" , $naam);
$query->bindparam("wachtwoord" , $wachtwoord);
if($query->execute()) {
    echo"je bent ingelogd!";
    }
else{
    echo"yourns";
}


?>