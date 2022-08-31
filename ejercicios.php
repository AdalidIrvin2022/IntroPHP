<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="titulo">Solución del ejercicio 1</h1>    
    <?php
        $resultado=$_POST["num1"]%$_POST["num2"];
        echo "<h1> El resultado de ". $_POST["num1"]." modulo ".$_POST["num2"]." es: ".$resultado."</h1>"; //Muestra el resultado usando echo
        print "<h1> El resultado de ". $_POST["num1"]." modulo ".$_POST["num2"]." es: ".$resultado."</h1>"; #Muestra el resultado usando print
    ?>
</body>
</html>