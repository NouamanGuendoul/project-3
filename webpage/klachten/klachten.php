<link rel="stylesheet" href="../navbar/menu.css"> 
<link rel="stylesheet" href="./klachten.css">

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

        header('Location: index.php');

        }}

    catch(PDOException $e){
        echo "Error!: " . $e->getMessage();
    }
    // $sqlSelect = "SELECT * FROM klachten";
    // $data = $conn->query($sqlSelect);

    $conn = null;

?>


<!-- Klachten Form -->
<div id="klacht-container">
<form method="post" action="" id="klacht-form">
    Naam: <br><input type="text" name="naam" id="naam-input"></input><br><br>
    Bericht: <br><textarea type="text" name="klacht" id="klacht-input"></textarea><br><br><br>
    <input type="submit" name="knop" id="knop">
</form>
</div>
