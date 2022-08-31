<?php
    print "<h1>Tipos de Datos en PHP</h1>";
    //Tipos de datos en PHP
    //Dato Entero - Integer
    print "<h2>Dato INTEGER</h2>";
    $x= 4567;
    var_dump($x);//var_dump(), nos devuelve el tipo de variable que PHP esta reconociendo.
    print "<br>El tipo de dato entero, tiene como limites: <br>
        -2.147.483.648 hasta 2.147.483.647
        <br>El tipo entero, debe contener por lo menos un digito
        <br>El tipo entero no posee punto decimal
        <br>El tipo entero puede ser positivo o negativo
        <br>El tipo entero puede abarcar desde el limite negativo hasta el limite positivo.
    "; 
    print "<h2>Tipo Float</h2>";
    $y=567.89;
    $y2=34.5E2;
    var_dump($y);
    var_dump($y2);
    print "<br> El tipo de dato FLOAT, tiene como principal característica que posee un punto decimal, por lo cual puede representar cantidades fraccionarias, así como también cantidades expresadas en notacion exponencial";

    print "<h2>Tipo Boolean</h2>";
    $z=true;
    $z2=false;
    var_dump($z);
    var_dump($z2);
    
    print "<h2>Tipo Array </h2>";
    $mascotas=array("gatito",true,4.6,3);
    var_dump($mascotas);

    print "<h2>Tipo Objeto</h2>";    
?>
