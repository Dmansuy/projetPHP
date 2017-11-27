<html>
<header>
<title>menu</title>
</header>
 <div id="menu">
	<title>menu</title>
	<FONT color="#019898"><h2>Menu</h2></FONT>
<ul class="menu-vertical">
    <li class="mv-item"><a href="index.php?par=0">Accueil</a></li>
	<?php
	
	if(empty($_SESSION['password']) && empty($_SESSION['email']))
	{
	 echo "<li class='mv-item'><a href='index.php?par=1'>Connexion</a></li>";
     echo "<li class='mv-item'><a href='index.php?par=3'>Inscription</a></li>";
	}
	?>
	<?php
if(!empty($_SESSION['password']) && !empty($_SESSION['email']))
{
	echo "  <li class='mv-item'><a href='index.php?par=6'>Supprimer Utilisateurs</a></li>";
	echo "<li class='mv-item'><a href='index.php?par=3'>Ajouter Utilisateurs</a></li>";
	echo "  <li class='mv-item'><a href='index.php?par=5'>Deconnexion</a></li>";
}
?>

</ul>
</div>



