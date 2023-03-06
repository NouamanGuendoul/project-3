<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <h1 class="producth1"> Alle product</h1>
    <?php include "menu.html";
    
    try {
 

        $db = new PDO("mysql:host=localhost;dbname=producten", "root", "");
        $query = $db->prepare("SELECT * FROM product ");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        
        echo '<table border="1" width="200px" height= "50px">' ;
        
        foreach ($result as $data) {
            echo " <tr> <td> ";
            echo" cijfer :   " . $data['productnaam'] . "<br>";
            echo " naam: " . $data['prijs'] . "";
          
           
        }
        echo "</td> </tr>  </table>";
    }  catch(PDOException $e)  {
        //die("Error!: " . $e->message());
    }


    
    ?>






    
</body>
</html>



