<?php
include "../navbar/menu.html";
?>

<link rel="stylesheet" href="./producten.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="../navbar/menu.css?v=<?php echo time(); ?>">


<h1 class="pro1"> Producten</h1>
    <?php

    echo "<div id='producten'>";
    echo" <div id='product1'> ";
    try {
 

        $db = new PDO("mysql:host=localhost;dbname=dol.com", "root", "");
        $query = $db->prepare("SELECT * FROM product ");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo "<div class='title-text'>";
        echo"Producten";
        echo "</div>";
        echo '<table border="1" width="200px" height= "50px">' ;
        
        foreach ($result as $data) {
            echo " <tr> <td>  ";
            echo" cijfer :   " . $data['productnaam'] . "<br>";
            echo " naam: " . $data['prijs'] . "";
          
           
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
 

        $db = new PDO("mysql:host=localhost;dbname=dol.com", "root", "");
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
            echo" adresgegevensleveranciers : ". $data['adresgegevensleveranciers'] . "<br>";
            echo " volgnummer : " . $data['volgnummer'] . "";
          
           
        }
        echo "</td> </tr>  </table>";
    }  catch(PDOException $e)  {
        //die("Error!: " . $e->message());
    }
    echo"</div> <br>";
    echo "</div>";
    ?>



