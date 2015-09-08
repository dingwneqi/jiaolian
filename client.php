<?php
//前台入口

define('THINK_PATH','ThinkPHP/');//底层位置
define('APP_NAME','./Client');//定义我们的项目的名称

define('APP_PATH','./Client/');//定义了我们项目的位置
define('RUNTIME_PATH','./Runtime/Client/');//重新定义缓存目录位置
define('APP_DEBUG',TRUE);//定义我们的DEBUG 开关
require THINK_PATH."ThinkPHP.php";
?> 