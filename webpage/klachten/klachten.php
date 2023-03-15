<link rel="stylesheet" href="../navbar/menu.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="./klachten.css?v=<?php echo time(); ?>">


<?php
    include "../navbar/menu.html";
    include "./connectpdo.php";

    try{
        $stmt = $conn->prepare("INSERT INTO klachten (naam, bericht, datum)
        VALUES (:naam, :klacht, :datum)");
        $stmt->bindParam('naam',$naam);
        $stmt->bindParam('klacht',$bericht);
        $stmt->bindParam('datum',$datum);

        if(isset($_REQUEST['naam'])){

            $naam = $_POST['naam'];
            $bericht = $_POST['klacht'];
            $datum = Date('d-m-Y');
            $stmt->execute();

        header('Location: klachten.php');

        }}

    catch(PDOException $e){
        echo "Error!: " . $e->getMessage();
    }
    // $sqlSelect = "SELECT * FROM klachten";
    // $data = $conn->query($sqlSelect);

    $conn = null;

?>


<!-- Klachten Form -->
<div id="klachten-retour">
    <div id="klacht-container">
    <form method="post" action="" id="klacht-form">
        Naam: <br><input type="text" name="naam" id="naam-input"></input><br><br>
        Bericht: <br><textarea type="text" name="klacht" id="klacht-input"></textarea><br><br>
        <input type="submit" name="knop" id="knop">
    </form>
    </div>
    <!-- Retourtermijn -->
    <section id="retour-container">
        <h2 id="retour-h2">Retourtermijn</h2><br>
        <p id="retour-p">
        Vanaf het moment dat je je bestelling ontvangt, heb je 30 dagen de tijd om je artikel als retour aan te melden in je account. Na het aanmelden van je retour, heb je 14 dagen de tijd om het op te sturen. Wat je diurnal retourneren 
        Binnen de retourtermijn diurnal je je bestelde artikel redelijk uitproberen om te weten of het naar werkt en of je er blij mee bent. Net zoals dat je kleding en schoenen history in een winkel, diurnal je een artikel dat je via een website bestelt, testen om te kijken of het bevalt en of het voldoet aan je eisen.
        Verder diurnal je het artikel kosteloos retourneren. Je diurnal het artikel niet volledig in gebruik nemen als je nog niet weet of je het houdt.<br><br>

        <h3 id="retour-h3">Dit kun je niet retourneren </h3> <br>

        • Cadeaubonnen en- kaarten <br>
        • Artikelen die om redenen van gezondheidsbescherming of hygiëne niet retour mogen( waarvan de verzegeling is verbroken zoals koptelefoons, oortjesetc.)<br>
        • Digitale artikelen( ebooks, luisterboeken en games) <br>
        • Software abonnementen/ producten( waarvan de verzegeling is verbroken) <br>
        • Audio- opnamen, videotape- opnamen, dvd's en computerprogrammatuur( waarvan de verzegeling is verbroken) <br>
        • Artikelen die op maat/ persoonlijk gemaakt worden, zoals gegraveerd bestek en op maat gemaakte gordijnen<br>
        • Bloemen, planten en kerstbomen die een beperkte houdbaarheid hebben
        </p>
    </section>
</div>