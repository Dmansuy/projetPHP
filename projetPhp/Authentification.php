<html>
<header>
 <meta charset="utf-8" />
		<title> Autenthification </title>
</header>
<?php
include ("ConnectBDD.php");


$sql = ("SELECT password, email FROM personne
				WHERE password='".$_POST['password']."'
				AND email='".$_POST['email']."'");
				
$resultat=$monPdo->query($sql);
if($ligne=$resultat->fetch())
{		
	echo "<script>alert(\"Connexion réussie, vous êtes connecté\")</script>";
	session_start();
	$_SESSION['password']=$_POST['password'];
	$_SESSION['email']=$_POST['email'];;
	
	header("location:index.php");
	?>
	<BODY> 
	<fieldset style="border:solid 1px black; padding:20px; width:250px; color:midnightblue; font-family:verdana;"> 
    <legend style="font-size:11; font-weight:bold;"><FONT color="#019898"><h2> Connexion </h2></FONT></legend>
	<table>
	<blockquote>
		<FONT color="#404040"><p>Félicitation ! Vous êtes connecté.<p></FONT>
	</blockquote>
	</table>
	</fieldset>
	<?php
}
else
{
	?>
	<fieldset style="border:solid 1px black; padding:20px; width:250px; color:midnightblue; font-family:verdana;"> 
    <legend style="font-size:11; font-weight:bold;"><FONT color="#019898"><h2> Connexion </h2></FONT></legend>
	<table>
	<blockquote>
		<FONT color="#404040"><p>La connexion a échoué. </br></br>► Réessayer <a href="http://localhost/projetPhp/index.php?par=1">ici </a> <p></FONT>
	</blockquote>
	</table>
	</fieldset>
	</body>
	<?php
}
echo "</select>";
echo "</form>";
?>
</html>

