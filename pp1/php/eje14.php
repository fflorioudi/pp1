<?php

function validar($nombre, $apellido) {
    if (trim($nombre) == "") {
        throw new Exception("El nombre no puede estar vacío");
    }

    if (trim($apellido) == "") {
        throw new Exception("El apellido no puede estar vacío");
    }
}

try {
    $nombre = $_GET["nombre"] ?? "";
    $apellido = $_GET["Apellido"] ?? "";

    validar($nombre, $apellido);

    $sexo = isset($_GET["Sexo"]) ? $_GET["Sexo"] : "No ingresado";
    $estadoCivil = $_GET["ecevil"] ?? "No ingresado";

    echo "<h3>Los valores ingresados en el formulario son:</h3>";

    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Estado civil: " . $estadoCivil . "<br>";

} catch (Exception $e) {
    echo "<h3>" . $e->getMessage() . "</h3>";
    echo "<a href='../html/eje11.html'>Volver al formulario</a>";
}

?>