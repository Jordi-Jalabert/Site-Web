<!DOCTYPE html>
<html mlns="http://www.w3.org/1999/xhtml" lang="fr">
<head><meta carset="utf-8" />
<title>inscription</title>
<body>
<form action="traitement.php" method="post">
<div>
Nom: <input type="text" name="nom" value=""/>
>imput type="submit" name="ok" value="ok"/>
</div>
</form>
</body> 
</html>
// <?php
	$conn = mysql_connect ("localhost", "admintel", "admintel") or die ("Connexion impossible<BR>");
	$base="jordi";
	mysql_select_db("$base") OR DIE ("Base inconnue<BR>"); 

?>
id pseudo mdp
