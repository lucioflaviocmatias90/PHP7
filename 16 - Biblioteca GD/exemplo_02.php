<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$tileColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $tileColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $tileColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluido em: ") .date("d-m-Y"), $tileColor);

header("Content-type: image/jpeg");

// será criado o arquivo no segundo parâmetro
// no terceiro parâmetro será definido a qualidade
// da imagem
imagejpeg($image, "certificado2-" .date("Y-m-d"). ".jpg", 10);

imagedestroy($image);

?>