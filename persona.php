<?php
class persona{
        public $nombre;
        public $ci;
        public $f_nacimiento;
        public function __construct($nombre, $ci, $f_nacimiento)
        {
            $this->nombre=$nombre;
            $this->ci=$ci;
            $this->f_nacimiento=$f_nacimiento;
        }
        function get_nombre(){
            return $this->nombre;
        }
        function set_nombre($n){
            $this->nombre=$n;
        }
        function get_ci(){
            return $this->ci;
        }
        function set_ci($n){
            $this->ci=$n;
        }
        function get_f_nacimiento(){
            return $this->f_nacimiento;
        }
        function set_f_nacimiento($n){
            $this->f_nacimiento=$n;
        }
        public function mostrar(){
            return "Nombre ".$this->nombre. " \nCon CI: ".$this->ci." \nNacido ".$this->f_nacimiento;
        }
        public function leer($minutos){
            echo "<br> A ".$this->nombre." le gusta leer durante ".$minutos." minutos";
        }
        public function usaTeleferico($opcion,$opcion2){
            return "<br>A ".$this->nombre." ".$opcion." le gusta viajar en teleferico durante la ".$opcion2;
        }
}
$p1=new persona("Jose",6685412,"19-09-1990");
echo $p1->mostrar();
$p1->leer(30);
$p2=new persona("Juan",458782,"12-05-1995");
echo $p2->mostrar();
$p2->leer(45);
$p3=new persona("Natalia",1234567,"27-04-2000");
echo $p3-> usaTeleferico("si","noche");
echo "<br>";
echo $p3->get_ci();
echo "<br>";
echo $p3->get_nombre();
echo "<br>";
echo $p3->get_f_nacimiento();

$p3->set_nombre("Pedro");
echo $p3->mostrar();

$p3->set_ci("9874556");
echo $p3->mostrar();
?>