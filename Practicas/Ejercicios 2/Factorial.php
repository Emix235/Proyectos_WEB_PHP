<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>

       <body>

             <form name="Lista de numeros" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
             <p>Imprimir valores</p><br>
             Introduzca un numero para escribir su factorial : <input type="text" name="v1" value="">

             <input value="Calcular" type="submit" name="submit" />
<?php 

    if (isset($_POST['submit'])) {
   

    $V1= $_POST['v1'];
    echo '<br/><br/>';
    echo " Valor inicial : ".$V1."<br/><br/>";
    
    while($V1!=1){
    
    if(($V1%2)==0){
        $V1=$V1/2;
        echo '2 <br />';
    }
    if(($V1%3)==0){
        $V1=$V1/3;
        echo '3 <br />';
    }
    if(($V1%5)==0){
        $V1=$V1/5;
        echo '5 <br />';
    }
    if(($V1%7)==0){
        $V1=$V1/7;
        echo '7 <br />';
    }
    if(($V1%11)==0){
        $V1=$V1/11;
        echo '11 <br />';
    }
    if(($V1%13)==0){
        $V1=$V1/13;
        echo '13 <br />';
    }
    if($V1==1){
     echo $V1.'<br/>';
    }else{
    if(($V1%2)!=0 && ($V1%3)!=0 && ($V1%5)!=0 && ($V1%7)!=0 && ($V1%11)!=0){
        echo $V1.'<br/>';
        $V1=$V1/$V1;
    }}
    
}
}
?>
       </form>

       </body>

</html>