<header>
 <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
		<title>Bienvenue</title>
</header>
<?php
	session_start();
	include"ConnectBDD.php";
	include "entete.html";
	include"menu.php";
	
?>
	<div id=contenu>
	<?php
if(empty ($_GET['par'])|| $_GET['par']==0)
{
	include "accueil.html";
}
else
{
	if($_REQUEST['par']==1)
	{
		include"Connexion.html";
	}
	if($_REQUEST['par']==2)
	{
		include "Authentification.php";
	}
	if($_REQUEST['par']==3)
	{	
		include "inscription.html";
	}
	if($_REQUEST['par']==4)
	{	
		include "ajout.php";
	}
	if($_REQUEST['par']==5)
	{	
		include "deconnexion.php";
	}
	if($_REQUEST['par']==6)
	{	
		include "delete.php";
	}
	if($_REQUEST['par']==7)
	{	
		include "deleteUser.php";
	}
}
?>
</div>