<?php
$hostnom='host=localhost';

$usernom='root';

$password='';

try {
$monPdo = new 
PDO("mysql:$hostnom;dbname=projet_php;charset=utf8",$usernom,$password);
//echo 'Connexion effectuée ' ;
 }

catch (PDOException $e)
 {
 echo $e->getMessage ();
 }

?>