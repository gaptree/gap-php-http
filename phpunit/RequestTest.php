<?php
namespace phpunit\Gap\Http;

use PHPUnit\Framework\TestCase;
use Gap\Http\Request;

class RequestTest extends TestCase
{
    public function testGetMethod(): void
    {
        $request = new Request();
        $this->assertEquals('GET', $request->getMethod());
    }
}
