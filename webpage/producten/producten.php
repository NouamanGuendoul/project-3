<?php
include "../navbar/menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./producten.css">
    <link rel="stylesheet" href="../navbar/menu.css?v=<?php echo time(); ?>">
</head>
<body>
    
  <h1 class="pro1"> Alle product</h1>
    <?php
    
    echo" <div class='product1'> ";
    try {
 

        $db = new PDO("mysql:host=localhost;dbname=producten", "root", "");
        $query = $db->prepare("SELECT * FROM product ");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo"producten";
        echo '<table border="1" width="200px" height= "50px">' ;
        
        foreach ($result as $data) {
            echo " <tr> <td>  ";
            echo" cijfer :   " . $data['productnaam'] . "<br>";
            echo " naam: " . $data['prijs'] . "";
          
           
        }
        echo "</td> </tr>  </table>";
    }  catch(PDOException $e)  {
        //die("Error!: " . $e->message());
    }
    
    echo"</div> ";
    echo" <div class='product2'> ";
    try {
 

        $db = new PDO("mysql:host=localhost;dbname=producten", "root", "");
        $query = $db->prepare("SELECT * FROM leveranciers");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        echo"leveranciers";
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
    ?>






    
</body>
</html>



