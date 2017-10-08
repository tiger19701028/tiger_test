<?php
/*
1.定义常量
2.加载函数库
3.加载类库
4.启动框架
*/

define('BASE',__DIR__);
define('APP',BASE.'\app');
define('CORE',BASE.'\core');

include "vendor/autoload.php";
include CORE.'/common/function.php';
include CORE.'/heart.php';

define('DEBUG',true);
if(DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register(); #错误控件
    ini_set('display_error','On');
} else {
    ini_set('display_error','Off');
}

spl_autoload_register('\core\heart::load');
\core\heart::run();