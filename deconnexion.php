<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://78.220.137.171/jordi/index.php">
<html xmlns="http://78.220.137.171/jordi/index.php" xml:lang="fr" >
   <head>
       <title>Médecine fi l'INESM, déconnexion</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body>
    <p>
    <?php
    session_start();
    session_destroy(); //on détruit la session
    ?>
    vous êtes déconnectés avec succès, cliquez <a href="http://78.220.137.171/jordi/index.php">ici</a> pour retourner à l'Acceuil
    </p>
   </body>
 
</html>
