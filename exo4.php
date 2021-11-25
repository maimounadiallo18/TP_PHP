<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
     <form action="exo4.php" method="GET">
     <input type="number" name="valeur"> 
     <input type="submit" value="valider" >
     </form>
 <?php 
  
$valeur=$_GET['valeur'];
for ($i=1; $i <= 10; $i++) { 
    echo $valeur+$i ." - ";
}

 ?>
 </body>
</html>