<?php

class Sala{
    private $numero;
    private $cantidadButacas;
    private $butacasOcupadas;

    public function __construct($numero, $cantidadButacas){
        $this->numero = $numero;
        $this->cantidadButacas = $cantidadButacas;
        $this->butacasOcupadas = 0;
    }

    public function venderButacas($cantidad){
        if($this->butacasOcupadas + $cantidad > $this->cantidadButacas){
            throw new Exception("La sala " . $this->numero . " ya no tiene espacio");
        }
        $this->butacasOcupadas = $this->butacasOcupadas + $cantidad;
    }

    public function mostrarOcupacion(){
        echo "Sala " . $this->numero . " : " . $this->butacasOcupadas . " butacas ocupadas<br>";
    } 
}

class Cine{
    private $salas = array();

    public function __construct(){
        $this->salas[1] = new Sala(1, 50);
        $this->salas[2] = new Sala(2, 30);
        $this->salas[3] = new Sala(3, 40);
    }

    public function venderEntrada($nroSala, $cantidadButacas){
        $this->salas[$nroSala]->venderButacas($cantidadButacas);
    }

    public function mostrarOcupacion(){
        echo "<h3>Ocupacion final de las salas</h3>";

        foreach ($this->salas as $sala){
            $sala->mostrarOcupacion();
        }
    }
}   

//Programa principal

$cine = new Cine();

for ($i = 1; $i <= 100; $i++){
    $nroSala = rand(1, 3);
    $cantidadButacas = rand(1, 2);

    try {
        $cine->venderEntrada($nroSala, $cantidadButacas);

        echo "venta " . $i . ": Sala " . $nroSala . " - " . $cantidadButacas . " butaca/s vendida/s <br>"; 
    } catch (Exception $e){
        echo "Venta " . $i . ": " . $e->getMessage() . "<br>";
    }
}

echo "<br>";
$cine->mostrarOcupacion();
?>  