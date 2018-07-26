<?php
$step = 200; //définiton de la variable
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 8</title>
   </head>
   <body>
     <p>
     <?php
while ($step >= 0) //définition de la boucle
{ echo 'Enfin !!! <br />';
$step = $step - 12; //décrémentation de 12 de la variable
}
      ?>
    </p>
   </body>
 </html>
