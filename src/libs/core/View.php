<?php
namespace Core\Libs;

use Core\Libs\Config;
use Latte\Engine;
use Latte\Loaders\FileLoader;

final class View 
{

    static  function render(string $template, array $data = [])
    {
        $latte = new Engine();
        $config = new Config();
        $latte->setTempDirectory($config->get('template_temp'));
        $latte->setAutoRefresh($config->get('template_auto_refresh'));
        $latte->setLoader( new FileLoader($config->get('template')));
        return $latte->render($template, $data);
    }
}
