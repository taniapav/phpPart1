<?php
  $name = 'Tom';
  echo $name;

 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP</title>
   </head>
   <body>
     <p>Bonjour
       <?php
       echo $name;
        ?>
     </p>
     <p>Bonjour
       <?
       = $name;
       ?>
     </p>

   </body>
 </html>
