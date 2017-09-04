<?php
require_once('../../vendor/autoload.php');

include('controller/controller.php');

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$method = $request->getMethod();

$controller = new Controller(array('request' => $request));
$controller->execute($method);

?>