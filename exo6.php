<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
     <form action="exo6.php" method="GET">
     <input type="number" name="valeur"> 
     <input type="submit" value="valider" >
     </form>
 <?php 
  
$valeur=$_GET['valeur'];
$somme=0;
for ($i=1; $i <= $valeur; $i++) { 
    $somme=$somme+$i;
}
echo "la somme est de ". $somme;
 ?>
 </body>
</html>