<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>

       <body>

             <form name="Lista de numeros" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
             <p>Imprimir valores</p><br>
             Introduzca un numero para saber si es par o impar : <input type="text" name="v1" value="">

             <input value="Calcular" type="submit" name="submit" />
<?php 

    if (isset($_POST['submit'])) {
        $V1=$_POST['v1'];
        if (($V1%2)==0) {
            echo "El numero es par ".$V1%2;
            echo '<br />';
            echo "  ".$V1/2;
        }else{
             echo "El numero es impar ".$V1%2;
             echo '<br />';
             echo "  ".$V1/2;
        }
 }
?>
       </form>

       </body>

</html>