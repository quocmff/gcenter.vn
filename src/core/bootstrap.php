<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', 1);
date_default_timezone_set('Asia/Ho_Chi_Minh');



require __DIR__.'/../../vendor/autoload.php';

$environment = 'development';

$whoops = new \Whoops\Run;
if ($environment !== 'production') {
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
} else {
    $whoops->pushHandler(function($e){
        echo 'Todo: Friendly error page and send an email to the developer';
    });
}
$whoops->register();

// Justthrow new \Exception;




require __DIR__.'/route.php';