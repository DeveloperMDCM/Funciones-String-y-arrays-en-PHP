<h1>Ejercicio 8</h1>
<div class="Ejercicio8">
    <?php
    // Path: Ejercicios\Ejercicio_8.php
    function comprobar_comun($lista1, $lista2)
    {
        $comun = false;
        foreach ($lista1 as $comun1) {
            foreach ($lista2 as $comun2) {
                if ($comun1 == $comun2) {
                    $comun = true;
                }
            }
        }
        return $comun;
    }

    $lista1 = [2, 2, 2, 2, 2];
    $lista2 = [1, 2, 3, 4, 5];
    echo "<p class='listas'>La lista 1 es: [" . implode(", ", $lista1) . "]</p>";
    echo "<p class='listas'>La lista 2 es: [" . implode(", ", $lista2) . "]</p>";
    echo comprobar_comun($lista1, $lista2) ? "Si tienen al menos 1 miembro en común " : "No tienen al menos 1 miembro en común";
    ?>
    <h1>
        <?php
        echo var_dump(comprobar_comun($lista1, $lista2));
        ?>
    </h1>
</div>