<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
     <form action="exo2.php" method="GET">
     <input type="number" name="valeur"> 
     <input type="submit" value="valider" >
     </form>
 <?php 
  
$valeur=$_GET['valeur'];
if ($valeur>20)
echo "plus petit ";
else if($valeur<10)
echo "plus grand";

?>
 </body>
</html>