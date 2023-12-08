<!DOCTYPE html>
<head>*
  <link rel="stylesheet" href="CSSSQL.css">

  <!-- Ceci est un commentaire -->
  <html lang="fr">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <meta charset="UTF-8">
 <title>Kokuryùkai</title>
    echo "<table class='vision'>"
    ?>
          <caption>Ville</caption>

        
<?php include"inclu.php";?>
<head>
<?php
include "connectSQL.php";
$req1="SELECT * FROM SCP";
$res1=$mysqli->query($req1) OR DIE ("Erreur select SCP : ".mysqli_error());
while ($row1 = mysqli_fetch_array($res1)) {


echo "<table>";
echo "<tr>";
echo "<td>";
echo $row1['pseudo'];
echo "</td>";
echo "<td>";
echo "   ";
echo "</td>";
echo "<td>";
echo $row1['zone'];
echo "</td>";
echo "</tr>";
echo "</table>";
}
?>













</html>
  </head>
