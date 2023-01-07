<h1>Ejercicio 4</h1>
<div class="Ejercicio4">
<?php 
// Path: Ejercicios\Ejercicio_4.php
$cadena = "estoy probando";
$cadena_inversa = "";
for ($i=strlen($cadena)-1; $i >= 0; $i--) {  //Recorre la cadena de forma inversa
    $cadena_inversa .= $cadena[$i]; //Añade el caracter a la cadena inversa
}
echo "<h4 class='listas'>La cadena original es: $cadena</h4>"; //Imprime la cadena original
echo "<h4 class='listas'>La cadena inversa es: $cadena_inversa</h4>"; //Imprime la cadena inversa

?>
</div>
