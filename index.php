<?php
require_once __DIR__ . '/vendor/autoload.php';

use Grasmash\PhpLambdaFunction\BusinessLogicExecutor;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$executor = new BusinessLogicExecutor($request);
$response = $executor->run();
$response->send();