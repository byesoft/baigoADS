<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/
$base = $_SERVER["DOCUMENT_ROOT"] . str_ireplace(basename(dirname($_SERVER["PHP_SELF"])), "", dirname($_SERVER["PHP_SELF"])); //初始路径

include_once($base . "config/init.class.php"); //载入初始化类

$obj_init = new CLASS_INIT(); //配置初始化

$obj_init->config_gen(); //检查并生成配置文件

include_once($obj_init->str_pathRoot . "config/config.inc.php"); //载入配置

include_once(BG_PATH_MODULE . "help/help.php"); //调用模块
