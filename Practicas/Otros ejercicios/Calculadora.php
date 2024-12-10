<?php //Pagina cetis17.edu.mx
$diametro=$_GET['diam'];
$altura=$_GET['altu'];
$radio=$diametro/2;
$Pi=3.1416;
$volumen=$Pi*$radio*$altura;
echo"<br/> &nbsp;Elvolumen del cilindro es de".$volumen.
"metros cubicos";
?>