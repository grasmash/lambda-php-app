<?php

namespace Grasmash\PhpLambdaFunction;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class BusinessLogicExecutor {

    private Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function run(): Response
    {
        $foo = $this->request->get('foo');
        $bar = $this->request->get('bar');

        $response = new JsonResponse([
            'foo' => $foo,
            'bar' => $bar,
        ]);
        $response->prepare($this->request);

        return $response;
    }
}