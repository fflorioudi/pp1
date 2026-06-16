<?php

class Persona {
    private $nombre;
    private $edad;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }
}

class Empleado extends Persona {
    private $sueldo;

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this->sueldo;
    }
}


// Crear objeto Persona
$persona1 = new Persona();
$persona1->setNombre("Juan");
$persona1->setEdad(25);

// Crear objeto Empleado
$empleado1 = new Empleado();
$empleado1->setNombre("Pedro");
$empleado1->setEdad(30);
$empleado1->setSueldo(5000);


// Mostrar valores de Persona
echo "<h3>Datos de la persona</h3>";
echo "Nombre: " . $persona1->getNombre() . "<br>";
echo "Edad: " . $persona1->getEdad() . "<br>";

echo "<br>";

// Mostrar valores de Empleado
echo "<h3>Datos del empleado</h3>";
echo "Nombre: " . $empleado1->getNombre() . "<br>";
echo "Edad: " . $empleado1->getEdad() . "<br>";
echo "Sueldo: " . $empleado1->getSueldo() . "<br>";

?>