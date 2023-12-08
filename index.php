<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS.css">

    <!-- Ceci est un commentaire -->
    <html lang="fr">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta charset="UTF-8">
   <title>Kokuryùkai</title>
</head>
    <body>       
	<?php include"inclu.php";?> 
<?php
session_start(); //on commence une session
?>
<li class="navigation_droite">
                <?php //on affiche un menu selon qu'on est connectés ou non
                if ($_SESSION['connecté']==1)
                {
                    echo '<a href="deconnexion.php">déconnexion '.$_SESSION['nom_utilisateur'].'</a>';
                }
             
                else
                {
                    echo '<a href="connexion.php">connexion</a>';
                }
                ?>
                </li>
                <li class="navigation_droite">
                <?php
                if ($_SESSION['connecté']==1)
                {
                    echo 'Bienvenue';
                }
                 
                else
                {
                    echo '<a href="inscription.php">inscription</a>';
                }
                ?></li> 
  <!-- Corps de la page -->
       <h1>Kokuryùkai</h1>

      </p>

       <p class="introduction">Bonjour et bienvenue sur mon site !</p>
	
       <p>A quoi  sert ce site ?<br />
        Il te fera découvir le monde des Animés est des jeux vidéos version manga.

        Ceci est mon premier test alors <strong>soyez indulgents</strong> s'il vous plait, j'apprends petit Ã  petit
          comment cela marche.</p>
      <p>
         Pour l'instant c'est un peu vide, mais revenez dans 2-3 jours quand j'aurai appris un peu plus de choses, je vous assure que vous allez être surpris !</p>

       <h2>Le monde des animés</h2>


          <p>Kokuryùkai: vous propose de découvir de nouveaux mondes <strong>destinés aux débutants</strong> :
 </p>
 	
 <p>  aucune connaissance n'est requise pour lire ces mondes !
 </p> 

 <p>  Vous pourrez ainsi apprendre, sans rien y connaître auparavant.
         
        </p>
         
        <p> 

         <h2>Une communauté active</h2>

          <p>Vous avez un problème, un élément du cours que vous ne comprenez pas ? Vous avez besoin d'aide pour comprendre c'est quoi un animé ou pour autre choses ?<br />
 </p> 
             
     <p>          Rendez-vous sur les forums où sur notre discord : 
          </p>

 <p> Vous y découvrirez que vous n'êtes pas le seul dans ce cas et vous trouverez très certainement quelqu'un qui vous aidera aimablement à résoudre votre problème.</p>
            </p>

 
           <p>  
</p>    
