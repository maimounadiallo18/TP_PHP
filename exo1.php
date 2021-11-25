<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
     <form action="exo1.php" method="GET">
     <input type="number" name="valeur"> 
     <input type="submit" value="valider" >
     </form>
 <?php 
  
$valeur=$_GET['valeur'];
if ($valeur <=3 && $valeur>=1)
echo "valeur ".$valeur." correcte";
else 
echo "valeur ".$valeur." incorrecte";
 ?>
 </body>
</html>