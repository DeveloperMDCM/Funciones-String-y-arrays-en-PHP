<h1>Ejercicio 7</h1>



<?php 
// Path: Ejercicios\Ejercicio_7.php
$personas = [

    ["nombre" => "Jhonatan","fecha_nacimiento" => "2010-04-01"],
    ["nombre" => "Andres","fecha_nacimiento" => "1998-01-01"],
    ["nombre" => "Maria","fecha_nacimiento" => "2000-02-23"]
];

//Funcion que devuelve la edad de una persona
function calcular_edad($fecha_nacimiento)
{
    $fecha_actual = date("Y-m-d");
    $fecha_nacimiento = date("Y-m-d", strtotime($fecha_nacimiento));
    $edad = date_diff(date_create($fecha_nacimiento), date_create($fecha_actual));
    return $edad->format('%y');
}
//Ultima persona en cumplir años proximamente 
$ultima_persona = end($personas);
$edad_ultima_persona = calcular_edad($ultima_persona["fecha_nacimiento"]);
$edad_proxima_persona = $edad_ultima_persona + 1;
$proxima_persona = prev($personas);
$edad_proxima_persona = calcular_edad($proxima_persona["fecha_nacimiento"]);
if ($edad_proxima_persona == $edad_proxima_persona) {
    echo "La proxima persona a cumplir años proximamente es: <h4>  " . $proxima_persona["nombre"] .  " con " . $edad_proxima_persona . " años nacido el año " . $proxima_persona["fecha_nacimiento"] . " cumplira " .$edad_proxima_persona+1 ." años proximamente</h4>" ; 
} else {
    echo "No hay proxima persona a cumplir años";
}
echo "<br><br>";
echo "<br>" .$personas[0]["nombre"] . " tiene " . calcular_edad($personas[0]["fecha_nacimiento"]) . " años nacido el año " . $personas[0]["fecha_nacimiento"];
echo "<br>" .$personas[1]["nombre"] . " tiene " . calcular_edad($personas[1]["fecha_nacimiento"]) . " años nacido el año " . $personas[1]["fecha_nacimiento"];
echo "<br>" .$personas[2]["nombre"] . " tiene " . calcular_edad($personas[2]["fecha_nacimiento"]) . " años nacido el año " . $personas[2]["fecha_nacimiento"];



    ?>
