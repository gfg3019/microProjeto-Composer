<?php

spl_autoload_register(function($class){
    require __DIR__.DIRECTORY_SEPARATOR ."vendor".DIRECTORY_SEPARATOR ."autoload.php";
});

//require __DIR__ . DIRECTORY_SEPARATOR."";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output;