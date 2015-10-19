<?php
   	include 'loggedin.php';
	?>  
  <html>
   <head>
   <title>Update info</title>
   </head>
   <body>
   <form method="post">
   Enter Barcode:<input type="text" name="bid" maxlength="6" />
   <input type="submit" name="submit" />
   </form>
   <?php
include 'deleteinfo.php';
?>
   </body>
   </html>