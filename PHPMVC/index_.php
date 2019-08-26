<?php
$controlName = $_REQUEST["c"];
$actionName = $_REQUEST["a"];
/**加载配置文件等* */
function require_file(){
    global $controlName;
    require_once('./config/db_config.php');
    require_once('./db/db_pdo.php');
    require_once('./db/db_sql.php');
    include('./services/' . strtolower($controlName) . "Service.php"); 
    include('./dao/' . strtolower($controlName) . "Dao.php");
    include('./controllers/' . strtolower($controlName) . "Controller.php");   //转换大小写,并将其名字拼接到一起
}
require_file();
$controllerName = ucfirst(strtolower($controlName)) . "Controller";

//
function ControllerAction($controllerName,$actionName) {
	$controller=new $controllerName();
	echo $controller->$actionName();
};
function orderControllerAction($controllerName,$actionName) {
	$controller=new $controllerName();
	echo $controller->$actionName($_REQUEST['sql']);
}
$controlName == "orderDetail"?orderControllerAction($controllerName,$actionName):ControllerAction($controllerName,$actionName);	