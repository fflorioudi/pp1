<?php

class Celda {
    private $nro;
    private $texto;

    public function setNro($nro) {
        $this->nro = $nro;
    }

    public function getNro() {
        return $this->nro;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getTexto() {
        return $this->texto;
    }
}


class Tabla {
    private $celdas = array();

    public function add($celda) {
        $this->celdas[] = $celda;
    }

    public function mostrarCeldas() {
        echo "<h2>Tabla de una columna y varias filas</h2>";

        echo "<table border='1'>";

        foreach ($this->celdas as $celda) {
            echo "<tr>";
            echo "<td>";
            echo "Celda nro " . $celda->getNro() . ": " . $celda->getTexto();
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}


// Programa principal

$tabla = new Tabla();

for ($i = 0; $i < 10; $i++) {
    $celda = new Celda();

    $celda->setNro($i);
    $celda->setTexto("Texto celda " . $i);

    $tabla->add($celda);
}

$tabla->mostrarCeldas();

?>