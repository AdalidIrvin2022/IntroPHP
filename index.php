<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de documento php</title>
</head>
<body>
    <h1>PHP</h1>
    <?php
        echo "<H1>Hola mundo</H1>";
        echo "
            <ol>
                <li>Primero
                <li>Segundo
                <li>Tercero
            </ol>";
        $nombre="Juancito";
        echo "<br>Hola mi nombre es ".$nombre." mucho gusto";
        
        
        //*Las variables en PHP se crean usando el simbolo $
        $n1=6;
        $n2=8;
        //$n3=$n1+$n2;
        //echo "<br>El resultado de la suma es>> ".$n3;
        
        function suma(){
            $n3=$GLOBALS['n1']+$GLOBALS['n2'];
            echo "<br>El resultado de la suma es>> ".$n3;
        }
        echo "<br> El valor de n1 es>> ".$n1;
        suma();

        function permanente(){
            static $x=0;            
            echo "<br>El valor de x es>> ".$x;
            $x++;
        }
        echo "<br><br>Permanencia de los datos";
        permanente();
        permanente();
        permanente();
        permanente();
        permanente();

        print("<br>Ejemplo");
        #Ejemplo de comentario
        $nombre="Adalid";
        $mensaje="<br>Nombre completo: ".$nombre;
        echo $mensaje;
        #GET
        $_GET["nombre"];
        echo $_GET["nombre"];

        class persona{
            public $nombre;
            public $edad;
            public $direccion;
            public $genero;
            public function __construct($nombre, $edad, $direccion, $genero)
            {
                $this->nombre=$nombre;
                $this->edad=$edad;
                $this->direccion=$direccion;
                $this->genero=$genero;
            }
            public function mensaje(){
                return $this->nombre." ".$this->edad." ".$this->direccion." ".$this->genero;
            }
        }
        $pers1=new persona("Adalid Yujra",30,"Z. Pasankeri","Varon");
        echo $pers1->mensaje();
    ?>
    <script src="/js/codigo.js">

    </script>

</body>
</html>