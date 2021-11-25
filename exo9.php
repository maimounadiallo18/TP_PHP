<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
     <form action="exo9.php" method="GET">
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
    if ($_GET['valeur'][$i] != 0) {
        array_push($tableau, $_GET['valeur'][$i]);
    }
    if ($_GET['valeur'][$i] == 0) {
        break;
    }
}
echo "le max est ".max($tableau);
 ?>
 </body>
</html> 