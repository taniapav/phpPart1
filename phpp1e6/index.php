<?php  $name = 'Mia'; ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP part1 exo6</title>
   </head>
   <body>
       <!-- Ici on sépare le html du code php afin d'accélerer le temps de chargement -->
     <p><?= 'Bonjour ' .$name. ' ,comment vas-tu?'; ?></p>
     <p>Bonjour <?= $name; ?>, comment vas-tu ?</p>
   </body>
 </html>
