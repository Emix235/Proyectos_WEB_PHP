<?php //Pagina cetis17.edu.mx
// Ejemplo de uso switch PHP aprenderaprogramar.com
$mes = $_POST['mes'];
        switch ($mes) {

            case 1: echo ("El mes es enero"); break;
            case 2: echo ("El mes es febrero"); break;
            case 10: echo ("El mes es octubre"); break;


            default: echo ("El mes no es enero, febrero ni octubre"); break;

        }
?>