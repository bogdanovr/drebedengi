<?php
ini_set('zlib.output_compression', 'Off');
ini_set('output_buffering', 'Off');
ini_set('output_handler', '');
apache_setenv('no-gzip', 1);

header("Content-Type: text/xml; charset=utf-8");
header('Cache-Control: no-store, no-cache');
header('Expires: '.date('r'));

/**
 * Пути по-умолчанию для поиска файлов
 */
set_include_path(get_include_path()
    .PATH_SEPARATOR.'classes'
    .PATH_SEPARATOR.'objects');

/**
 * Путь к конфигурационному файлу
 */
const CONF_NAME = "config.ini";

/**
 ** Функция для автозагрузки необходимых классов
 */
function __autoload($class_name){
    include dirname(__FILE__) .'/inc/class/'.$class_name.'.class.php';
}

require_once(dirname(__FILE__) . '/conf/config.php');

ini_set("soap.wsdl_cache_enabled", "0"); // отключаем кеширование WSDL-файла на время тестирования

//Создаем новый SOAP-сервер на базе wsdl
$server = new SoapServer("http://{$_SERVER['HTTP_HOST']}/soap/inc/wsdl/ddengi.wsdl.php");
//Регистрируем класс обработчик
$server->setClass("ddengi");
//Запускаем сервер
$server->handle();
?>
