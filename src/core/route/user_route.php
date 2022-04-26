<?php
use Core\Libs\View;
if (isset($match['params']['page'])) {
    $page = $match['params']['page'];
} else {
    $page = '';
}
var_dump($match['target']);
var_dump($match['params']);
var_dump($match['name']);
if  (file_exists($config->get('template_user').'/'.$page.'.latte')) {
    View::render( 'user/view/'.$page .'.latte', ['page_tittle' => 'Gcenter']);
} else {
    View::render('user/view/home.latte');
}



