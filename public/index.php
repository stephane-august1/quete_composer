<?php
require_once  '../vendor/autoload.php'; // Autoload files using Composer autoload

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new App\Wcs\Hello();
$Sayhello = new SayHello();
echo $Sayhello->world();
echo $hello->talk();
