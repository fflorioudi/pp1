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

    public function mostrar() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
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

    public function mostrar() {
        parent::mostrar();
        echo "Sueldo: " . $this->sueldo . "<br>";
    }
}


// Objeto Persona
$persona1 = new Persona();
$persona1->setNombre("Juan");
$persona1->setEdad(25);

// Objeto Empleado
$empleado1 = new Empleado();
$empleado1->setNombre("Pedro");
$empleado1->setEdad(30);
$empleado1->setSueldo(5000);


// Mostrar datos
echo "<h3>Datos de la persona</h3>";
$persona1->mostrar();

echo "<br>";

echo "<h3>Datos del empleado</h3>";
$empleado1->mostrar();

?>