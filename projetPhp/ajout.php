<html>
<head>
<title> Inscription </title>
</head>
<?php

include "ConnectBDD.php";
$sql="insert into personne values (null,'".$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."','".$_POST['password']."','".$_POST['cp']."','".$_POST['ville']."')";
$result=$monPdo->query($sql); //exécution de la requête
?>
<BODY> 
<fieldset style="border:solid 1px black; padding:20px; width:250px; color:midnightblue; font-family:verdana;"> 
<legend style="font-size:11; font-weight:bold;"><FONT color="#019898"><h2> Inscription Réussi </h2></FONT></legend>
<table>
<blockquote>
<FONT color='#404040'><?php echo $_POST['nom']." ".$_POST['prenom'] ?> à bien été enregsistré.</FONT></br>
</blockquote>
</table>
</fieldset>
</html>