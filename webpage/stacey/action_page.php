<?php

var_dump($_POST);


$a[0]="jan";
$a[1]="rob";
$a[2]="piet";

$b=array(10,11,12,34,100,1000);




echo'<table border="1" width="200">';
foreach($a as $value){
    echo"<tr><td>";

    echo $value . "<br>";

    echo "</td></tr>";

}