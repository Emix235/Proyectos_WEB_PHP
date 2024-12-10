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
session_start();
;
    if (isset($_POST['submit'])) {
    $V1=$_POST['v1'];
    $_SESSION['v1']=$V1;
    echo '<br/><br/>';
    echo " Valor inicial : ".$_SESSION['v1']."<br/><br/>";
do{
    echo $_SESSION['v1'].'<br/>';
    if ($_SESSION['v1']==0) {
        header('Location:./A1.php');
    }
    $_SESSION['s']=$_SESSION['v1']+$_SESSION['s'];
    $_SESSION['v1']=0;    
} while($_SESSION['v1']!=0);
    echo '<br/>';
    echo "Sumatoria : ".$_SESSION['s']."<br/>";
}
?>
       </form>

       </body>

</html>