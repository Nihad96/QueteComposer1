<?php

require '../vendor/autoload.php';

$objet = new App\Wcs\Hello();
$text = $objet->talk();
echo $text;
echo '<hr/>';

$objet2 = new HelloWorld\SayHello();
$text2 = $objet2->world();
echo $text2;
