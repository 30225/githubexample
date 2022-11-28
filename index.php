<?php
//definicion de la clase paloma 
class Ave{
    //Atributos de clase
    protected $energia=0;
    public $dias_vida;
    public $km_recorridos;
    //Metodos
    public function __construct($energiaInicial,$diasVidaInicial)
    {
        $this->energia = $energiaInicial;
        $this->dias_vida = $diasVidaInicial;
    }
    public function getEnergia(){
        return $this->energia;
    }
    public function setEnergia($energiaNueva){
        if($energiaNueva<0) return false;
        $this->energia=$energiaNueva;
    }

    public function comer(){
        $this->energia += 10;
    }
    public function volar($km,$ubicacionActual){
        $this->km_recorridos += $km;
        $this->energia -= $km*5;
    }
}
class Paloma extends Ave{
    private $ubicacion;
    public function getUbicacion(){
        return $this->ubicacion;
    }
    public function setUbicacion($ubicacionActual){
        if($ubicacionActual=="") return false;
        $this->ubicacion=$ubicacionActual;
    }

    public function comer(){
        $this->energia += 15;
    }
    public function volar($km,$ubicacionActual){

        parent::volar($km,$ubicacionActual);
        $this->ubicacion = $ubicacionActual;
    }

}
class Canario extends Ave{
    public function cantar(){
        echo "bla, bla, bla";
    }

}
class Gorrion extends Ave{

}
class Gallina extends Ave{

}
//implementacion
$pepita = new Paloma(0,0);
$pepita->comer();
echo "Energia: ".$pepita->getEnergia();
$pepita->setEnergia(100);
echo "</br>";
$pepita->volar(2,"parque");
echo "Energia: " .$pepita->getEnergia();
echo "</br>";
echo "Ubicacion: ".$pepita->getUbicacion();

$pepe = new Paloma(0,0);
$pepe->comer();
echo "Energia de pepe: ".$pepe->getEnergia();
echo "</br>";
$pepe->volar(5,"plaza");
echo "Energia de pepe: ".$pepe->getEnergia();
echo "</br>";
?>