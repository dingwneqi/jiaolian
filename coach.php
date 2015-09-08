<?php
//后台入口
define('THINK_PATH','ThinkPHP/');//底层位置
define('APP_NAME','Coach');
define('APP_PATH','./Coach/');//定义了我们项目的位置
define('RUNTIME_PATH','./Runtime/Coach/');//重新定义缓存目录位置
define('APP_DEBUG',TRUE);
require THINK_PATH."ThinkPHP.php";
?>