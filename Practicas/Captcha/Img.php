<?php 

session_start();
function generar_caracteres($chars, $lenght){
                 $captcha = null;
                 for ($i=0; $i < $lenght; $i++) { 
                     $rand = rand(0, count($chars)-1);
                     $captcha .= $chars[$rand];
                 }
                 return $captcha;
}

$captcha = generar_caracteres(array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h'), 4);

$_SESSION['captcha_code'] = $captcha;

$imagen = imagecreate(100, 35);

$fondo = imagecolorallocate($imagen, 126, 2, 153);
$texto = imagecolorallocate($imagen, 255, 255, 255);

ImageFill($imagen,50, 0, $fondo);

imagestring($imagen, 80, 0, 0, $captcha, $texto);
header('Content-type: image/png');
imagepng($imagen);


?>