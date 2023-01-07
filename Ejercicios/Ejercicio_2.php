<h1>Ejercicio 2</h1>
<div class="Ejercicio2">
    <?php
    // Path: Ejercicios\Ejercicio_2.php
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //se crea un array con 10 números
    function ordenar_array($array)
    {
        arsort($array);  //El metodo arsort Ordena de mayor a menor 
        return $array; //Devuelve el array ordenado de mayor a menor
    }
    //Impresion del array ordenado
    echo "<p class='listas'>El array original es: [" . implode(", ", $array) . "]</p>"; //implode convierte un array en un string
    echo "<p class='listas'>El array ordenado es: [" . implode(", ", ordenar_array($array)) . "]</p>"; 
    ?>
</div>