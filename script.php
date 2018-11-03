<center>
<?php
$fichero = 'informacion.csv';
if (($manejador = fopen ( $fichero, "r" )) !== FALSE) { // si el fichero lo abrimos para leer correctamente
 echo "Leyendo el fichero: <br>";
   while ( ($arrayFila = fgetcsv ( $manejador, 1000, "," )) !== FALSE ) {
   	for($i = 0; $i < count ( $arrayFila ); $i ++) {
   echo $arrayFila [$i] . "  ";
  }
  echo "<br>";
 }
 fclose ( $manejador );
}
  ?>
</center>
