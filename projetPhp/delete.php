<?php
include "ConnectBDD.php";
?>
<!DOCTYPE html>

 <meta charset="UTF-8" />

<html>
<head>
<title> Un formulaire </title>
</head>

<BODY> 
  <fieldset style="border:solid 1px black; padding:20px; width:400px; color:midnightblue; font-family:verdana;"> 
    <legend style="font-size:11; font-weight:bold;"><FONT color="#019898"><h2> Supprimer un Utilisateur </h2></FONT></legend>

<form action="index.php?par=7" method="POST">

<?php
	$sql = ("SELECT * FROM personne");
	$resultat=$monPdo->query($sql);
?>
        <table>
        	<tr>
        		<td>ID</td>
        		 <td>Nom</td>
        		 <td>Prenom</td>
        		 <td>Email</td>
        		 <td>CP</td>
                 <td>Ville</td>
            </tr>
                 <?php
                 while($rows = $resultat->fetch (PDO::FETCH_ASSOC))
                 	{
                 	 ?>
                 	 <tr>
                 	 	<td> <?php echo $rows['id']; ?> </td>
                 	 	<td> <?php echo $rows['nom']; ?> </td>
                 	 	<td> <?php echo $rows['prenom']; ?> </td>
                 	 	<td> <?php echo $rows['email']; ?> </td>
                 	 	<td> <?php echo $rows['cp']; ?> </td>
                 	 	<td> <?php echo $rows['ville']; ?> </td>
                 	 </tr>
                 	 <?php
                 	}
                 	?>   
                 </table>
             </br>
             <center>
             	<FONT color="red"> * </FONT>Rentrée le nom de l'utilisateur à supprimer</br>
             </br><input type="text" name="id" size="30"></center>
             </br></br>
                 <center>
             	<input type ="submit" value="►  Effacer " >
             	<input type ="reset" value="►  Annuler " >
             </center>
             </fieldset>
         </form>
     </body>
</html> 