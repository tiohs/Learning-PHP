 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data </title>
 </head>
 <body>
   <?php 
      // Recupera a data actual 
      echo date_default_timezone_get();
      echo "<br>";
      echo date('d/m/Y H:i');
      echo "<br>";
      echo strtotime('10-09-1999');
   ?>
 </body>
 </html>