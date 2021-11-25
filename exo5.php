<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
     <form action="exo5.php" method="GET">
     <input type="number" name="valeur"> 
     <input type="submit" value="valider" >
     </form>
 <?php 
  
$valeur=$_GET['valeur'];
for ($i=1; $i <= 10; $i++) { 
    echo nl2br("".$valeur ." * ". $i ." = ". $valeur*$i ."\n");
}

 ?>
 </body>
</html>