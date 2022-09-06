<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$foo = $request->query->get('foo');
$bar = $request->query->get('bar');

$response = new JsonResponse([
    'foo' => $foo,
    'bar' => $bar,
]);
$response->prepare($request);
$response->send();