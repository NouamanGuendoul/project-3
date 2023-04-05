<?php
include "../navbar/menu.html";
include "./connectpdo.php";
?>

<link rel="stylesheet" href="../main.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../navbar/menu.css?v=<?php echo time(); ?>">


<h1 class="pro1"> Producten</h1>
    <?php

    echo "<div id='producten'>";
    echo" <div id='product1'> ";
    try {
 

        $db = $conn;
        $query = $db->prepare("SELECT * FROM product  ");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<div class='title-text'>";
        echo"Producten";
        echo "</div>";
        echo '<table border="1" width="200px" height= "50px">' ;
        
        foreach ($result as $data) {
            echo " <tr> <td>  ";
            echo" Product:   " . $data['productnaam'] . "<br>";
            echo " Prijs: " . $data['prijs'] . "";
          
           
        }
        echo "</td> </tr>  </table>";
    }  
    catch(PDOException $e)  {
        //die("Error!: " . $e->message());
    }
    echo"</div> ";

    echo"</div> ";

 
    echo" <div id='leveranciers'> ";

    try {
 

        $db = $conn;
        $query = $db->prepare("SELECT * FROM leveranciers");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<div class='title-text'>";
        echo "Leveranciers";
        echo "</div>";
        echo '<table border="1" width="200px" height= "50px">
        ' ;
        
        foreach ($result as $data) {
            echo " <tr> <td>  ";
            echo" Naam: ". $data['naamleveranciers'] . "<br>";
            echo" Adres: ". $data['adresgegevensleveranciers'] . "<br>";
            echo " Nummer: " . $data['volgnummer'] . "";
          
           
        }
        echo "</td> </tr>  </table>";
      
    }  catch(PDOException $e)  {
        //die("Error!: " . $e->message());
    }
 
    echo "</div>";

    

    echo" <div class='Filter-leveranciers'> ";
if (isset($_POST['submit'])) {

    $id = $_POST['id'];

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT volgnummer, naamleveranciers, adresgegevensleveranciers FROM leveranciers WHERE volgnummer='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "volgnummer: " . $row["volgnummer"] . "<br>" .
                "Name: " . $row["naamleveranciers"] . "<br>" .
                $row["adresgegevensleveranciers"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}
echo "</div>";

    ?>

<div id="Form-Filter-leveranciers">
   
        <form method="post">
            <label for="id">voer volgnummer:</label> <br>
            <input type="text" name="id" id="id">
            <button type="submit" name="submit">Submit</button>
        </form>
    
</div>

