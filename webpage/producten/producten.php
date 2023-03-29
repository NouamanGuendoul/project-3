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
    echo" <div id='product2'> ";
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
            echo" Adres: ". $data['adresgegevensleveranciers'] . "<br>";
            echo " Nummer: " . $data['volgnummer'] . "";
          
           
        }
        echo "</td> </tr>  </table>";
    }  catch(PDOException $e)  {
        //die("Error!: " . $e->message());
    }
    echo"</div> <br>";
    echo "</div>";
    ?>



