<?php
//      $conn = mysql_connect ("localhost", "teladmin", "teladmin") or die ("Connexion impossible<BR>");
//      $base="telephones";
//      mysql_select_db("$base") OR DIE ("Base inconnue<BR>"); 

?>
<?php
$serveur = "localhost";
$base = "jordi";
$user = "jordi";
$pass = "J0rd1";
$mysqli = new mysqli($serveur, $user, $pass, $base);
if ($mysqli->connect_error) {
    die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
}
?>
