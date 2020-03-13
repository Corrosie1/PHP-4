<?php require_once("../php/includes/default.inc.php")  ?>
<?php error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>MVC structuur</title>
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body style="">
     <?php
        $app = new \mvc\App();
        echo $app
      ?>
   </body>
 </html>
