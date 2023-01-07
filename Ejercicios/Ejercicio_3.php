<h1>Ejercicio 3</h1>
<div class="Ejercicio3">

    <?php
    // Path: Ejercicios\Ejercicio_3.php
    //Nota el numero 1 es divisible sólo por sí mismo.  
    function obtener_parejas_primos($numero) //Función que devuelve un array con las parejas primos
    {
        $parejas = [];
        for ($i = 1; $i <= $numero; $i++) {
            if (es_primo($i)) {
                for ($j = 1; $j <= $numero; $j++) {
                    if (es_primo($j)) {
                        if ($i != $j) {
                            $parejas[] = [$i, $j];
                        }
                    }
                }
            }
        }
        return $parejas; //Devuelve un array con todas las parejas de números primos relativos entre si
    }
    //comprobar si un número es primo
    function es_primo($numero)
    {
        $es_primo = true;
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $es_primo = false;
            }
        }
        return $es_primo; //Devuelve true si es primo y false si no lo es
    }
    //imprimir parejas primos
    function imprimir_parejas_primos($parejas)
    {
        foreach ($parejas as $pareja) {
            echo "<p class='listas'>$pareja[0] y $pareja[1] Son relativos entre si</p> ";
        }
    }
    //obtener parejas primos
    $parejas = obtener_parejas_primos(10);
    //imprimir parejas primos
    imprimir_parejas_primos($parejas);
    ?>
</div>