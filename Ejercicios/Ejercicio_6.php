<h1>Ejercicio 6</h1>
<div class="Ejercicio6">

    <?php
    // Path: Ejercicios\Ejercicio_6.php
    $frase = "Hola Hola mundo";
    echo "La frase ingresada es: " . "<h3>" . $frase . "</h3>";
    $mayusculas = 0;
    $minusculas = 0;
    $vocales = 0;
    $consonantes = 0;
    $array_vocales = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U"); //se crea un array con las vocales
    for ($i = 0; $i < strlen($frase); $i++) {
        if (ctype_upper($frase[$i])) { //si el caracter es mayuscula
            $mayusculas++;
        }
        if (ctype_lower($frase[$i])) { //si el caracter es minuscula
            $minusculas++;
        }
        if (in_array($frase[$i], $array_vocales)) { //in_array busca si un elemento esta en un array
            $vocales++;
        }
        if (!in_array($frase[$i], $array_vocales)) { //si no esta en el array de vocales entonces es consonante
            $consonantes++;
        }
        if ($frase[$i] == " ") { // si el caracter es un espacio no cuenta
            $consonantes--;
        }
    }

    echo "Vocales: " . $vocales . "<br>";
    echo "Mayusculas: " . $mayusculas . "<br>";
    echo "Minusculas: " . $minusculas . "<br>";
    echo "Consonantes: " . $consonantes . "<br>";
    ?>
</div>