<html>
<head>
<title> Supression </title>
</head>
<?php

include "ConnectBDD.php";
if (!empty($_POST['id'])) {
	$sql= "DELETE FROM `personne` WHERE id = ".$_POST['id']."";
	$stmt = $monPdo->prepare($sql);
	$stmt->execute();

?>
<BODY> 
	<fieldset style="border:solid 1px black; padding:20px; width:250px; color:midnightblue; font-family:verdana;"> 
		<legend style="font-size:11; font-weight:bold;"><FONT color="#019898"><h2> Suppression Réussi </h2></FONT></legend>
		<table>
			<blockquote>
				<FONT color='#404040'><b><?php echo $_POST['id'] ?></b> à bien été supprimer.</FONT></br>
			</blockquote>
		</table>
	</fieldset>
	</html>
	<?php
}
else
{
	?>
	<fieldset style="border:solid 1px black; padding:20px; width:250px; color:midnightblue; font-family:verdana;"> 
    <legend style="font-size:11; font-weight:bold;"><FONT color="#019898"><h2> Connexion </h2></FONT></legend>
	<table>
	<blockquote>
		<FONT color="#404040"><p>La suppression a échoué. </br></br>► Réessayer <a href="http://localhost/projetPhp/index.php?par=6">ici </a> <p></FONT>
	</blockquote>
	</table>
	</fieldset>
	</body>
	<?php
}
