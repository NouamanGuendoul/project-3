<?php include 'menu.php';
$naam=$_POST['Naam'];
$wachtwoord=$_POST['Wachtwoord'];
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