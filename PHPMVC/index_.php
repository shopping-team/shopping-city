<?php
$controlName=$_REQUEST['c'];
$actionName=$_REQUEST['a'];
/**加载配置文件等* */
function require_file(){
global $controlName;
	require_once('./config/db_config.php');
	require_once('./db/db_pdo.php');
	require_once('./db/db_sql.php'); 
	include('./controllers/'.strtolower($controlName)."Controller.php");
	include('./services/'.strtolower($controlName)."Service.php");
	include('./dao/'.strtolower($controlName)."Dao.php");
};
require_file();
$controllerName=ucfirst(strtolower($controlName))."Controller";
function ControllerAction($controllerName,$actionName) {
	$controller=new $controllerName();
	echo $controller->$actionName();
};
function orderControllerAction($controllerName,$actionName) {
	$controller=new $controllerName();
	echo $controller->$actionName($_REQUEST['sql']);
}
$controlName == "orderDetail"?orderControllerAction($controllerName,$actionName):ControllerAction($controllerName,$actionName);	


// var json = [{'size':'寸','size_value':[{'size_value1':3,'shop_price':150,'product_price':120,'discount_price':130},{'size_value2':6,'shop_price':300,'product_price':240,'discount_price':260}]},{'capacity':'ML','size_value':[{'capacit_value1':500,'shop_price':16,'product_price':10,'discount_price':15},{'capacity_value2':700,'shop_price':20,'product_price':15,'discount_price':19},{'capacity_value3':1000,'shop_price':24,'product_price':18,'discount_price':23}]}]
