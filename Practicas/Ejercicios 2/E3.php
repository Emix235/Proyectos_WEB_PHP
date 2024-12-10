<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>

       <body>

             <form name="Lista de numeros" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
             <p>Imprimir los valores</p><br>
             Introduzca un numero para escribir su suma : <input type="text" name="v1" value="">

             <input value="Calcular" type="submit" name="submit" />
<?php 

    if (isset($_POST['submit'])){

    
    }
?>
       </form>

       </body>

</html>