<?php 
$tipoMotor = $_POST['tipoM'];
        switch ($tipoMotor) {

            case 0: echo ("No hay establecido un valor definido para el tipo de bomba.<br/>"); break;

            case 1: echo ("<br/>La bomba es una bomba de agua."); break;
            case 2: echo ("<br/>La bomba es una bomba de gasolina.<br/>"); break;
            case 3: echo ("<br/>La bomba es una bomba de hormigón.<br/>"); break;
            case 4: echo ("<br/>La bomba es una bomba de pasta alimenticia.<br/>"); break;

            default: echo ("<br/>No existe un valor válido para tipo de bomba.<br/>"); break;

        }
        ?>