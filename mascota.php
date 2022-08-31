<?php
class mascota{
        public $nombre;
        public $especie;
        public $edad;
        public function __construct($nombre, $especie, $edad)
        {
            $this->nombre=$nombre;
            $this->especie=$especie;
            $this->edad=$edad;
        }
        public function mostrar(){
            return "Nombre ".$this->nombre. " es un ".$this->especie." y tiene ".$this->edad;
        }
}
$gatito=new mascota("silvestre","gato",3);
echo $gatito->mostrar();
?>