<?php
require_once('vendor/autoload.php');

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');