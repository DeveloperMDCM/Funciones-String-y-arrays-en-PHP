<h1>Ejercicio 1</h1>

<?php

// Path: Ejercicios\Ejercicio_1.php
echo "<form method='post' >";
echo "<input type='password' name='contrasena' id='' placeholder='Nombre de usaurio'>";
echo "<input type='submit' value='Enviar'>";
echo "</form>";

if(isset($_POST['contrasena'])){ //si se ha enviado el formulario
    $contrasena = $_POST['contrasena']; //se guarda la contraseña en una variable
    $longitud = strlen($contrasena); //se guarda la longitud de la contraseña en una variable
    echo "<p class='listas'>El nombre de usuario es: " . $_POST['contrasena'] . "</p>";
    $alfanumerico = ctype_alnum($contrasena); //se guarda el resultado de la comprobación de que la contraseña solo contiene letras y números en una variable
    if($longitud < 6){ //si la longitud de la contraseña es menor que 6
        echo "El nombre de usuario 
        debe contener al menos 6 caracteres";
    }elseif($longitud > 12){ //si la longitud de la contraseña es mayor que 12
        echo "El nombre de usuario no debe contener más de 12 caracteres";
    }elseif($alfanumerico == false){ //si la contraseña no contiene solo letras y números
        echo "El nombre de usuario puede contener solo letras y números";
    }else{
        echo "Contraseña correcta <p> usuario valido </p>";
    }
}
?>

</div>