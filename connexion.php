<?php
session_start(); //on commence une session
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://78.220.137.171/jordi/index.php">
<html xmlns="http://78.220.137.171/jordi/index.php" xml:lang="fr" >
   <head>
    <link rel="stylesheet" href="CSSlogin.css">
       <title>Kokurùkai,connexion</title>
       <meta http-equiv="Content-Type" content="text/html  charset=(utf8)" />
   </head>


</body>
<?php
include "connectSQL.php";
?>

<form action="connexion.php" method="POST">
                <h1>Connexion</h1>


                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='submit
	' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";

              }
              SELECT nom_du_champ FROM nom_du_tableau
              SELECT ville FROM client
              <?php
//On se connecte à la base de données
mysql_connect("localhost", "root", "");
mysql_select_db("enregistrement");

$retour = mysql_query("SELECT COUNT(*) AS membres FROM membre_pays");
$donnees = mysql_fetch_array($retour);
echo $donnees['membres'];

$requete1 = mysql_query('SELECT membre_pays FROM membres ');

while ($donnees = mysql_fetch_array($requete1))
{
if ($donnees['membre_pays'] == "")
{
$donnees = "";
}
else
{
?>
<option value="<?php echo $donnees['membre_pays'];?>"><?php echo $donnees['membre_pays'];?></option><?php
}
}
?><?php
//On se connecte à la base de données
mysql_connect("localhost", "root", "");
mysql_select_db("enregistrement");

$retour = mysql_query("SELECT COUNT(*) AS membres FROM membre_pays");
$donnees = mysql_fetch_array($retour);
echo $donnees['membres'];

$requete1 = mysql_query('SELECT membre_pays FROM membres ');

while ($donnees = mysql_fetch_array($requete1))
{
if ($donnees['membre_pays'] == "")
{
$donnees = "";
}
else
{
?>
<option value="<?php echo $donnees['membre_pays'];?>"><?php echo $donnees['membre_pays'];?></option><?php
}
}
?>  
                ?>
            </form>

    </body>
</html>
