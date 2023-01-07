
<h1>Ejercicio 5</h1>
<?php 
// Path: Ejercicios\Ejercicio_5.php
 $histograma = [4, 9, 7] ; //se crea un array con 3 números
echo "<h4 class='listas'>La lista es: [" . implode(", ", $histograma) . "]</h4>";
?>
<div id="histograma">
<?php 
//Imprimir un histograma de una array de números

 foreach ($histograma as $histograma) {  //Se recorre el array y se imprime el histograma
    echo "<h1 class='histograma'>";
    for ($i=0; $i < $histograma; $i++) { 
         echo " *";            
        }
    }

?>

</div>