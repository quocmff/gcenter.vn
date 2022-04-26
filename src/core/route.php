<?php
use Core\Libs\Config;

$route = new AltoRouter();

$route->map( 'GET', '/', ['route' => 'core', 'page' => 'landing']);

$route->map( 'GET', '/user', ['route' => 'user', 'page' => 'home']);

$route->map( 'GET', '/user/login', ['route' => 'user', 'page' => 'login']);

$match = $route->match();

if( is_array($match) && isset( $match['target'] ) ) {
	//call_user_func_array( $match['target'], $match['params'] );
    $config = new Config;
    if (file_exists($config->get('route').'/'.$match['target']['route'] .'_route.php')) {
        require $config->get('route').'/'.$match['target']['route'] .'_route.php';
    }
} else {
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo 'Không tìm thấy trang';
}