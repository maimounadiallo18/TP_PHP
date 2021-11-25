<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
     <form action="exo8.php" method="GET">
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="number" name="valeur[]"> 
     <input type="submit" value="valider" >
     </form>
 <?php 
  
$tableau=array();

for ($i=0; $i < 20; $i++) { 
    array_push($tableau, $_GET['valeur'][$i]);
}
echo "le max est ".max($tableau);
 ?>
 </body>
</html> 