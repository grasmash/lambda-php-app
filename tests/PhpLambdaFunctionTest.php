<?php

namespace Grasmash\PhpLambdaFunction\Tests;

use Grasmash\PhpLambdaFunction\BusinessLogicExecutor;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

/**
 * PhpLambdaFunctionTest
 * @see https://symfony.com/doc/current/http_client.html#testing
 */
class PhpLambdaFunctionTest extends TestCase {

    /**
     * @covers \Grasmash\PhpLambdaFunction\BusinessLogicExecutor::run
     */
    public function testPhpLambdaFunction() {
        $data = [
            'foo' => 'test',
            'bar' => 'ing'
        ];
        $request = Request::create(
            'https://something.lambda-url.us-east-1.on.aws',
            'POST',
            $data);

        $executor = new BusinessLogicExecutor($request);
        $response = $executor->run();

        $this->assertEquals(json_encode($data), $response->getContent());
        $this->assertTrue($response->isSuccessful());
    }
}