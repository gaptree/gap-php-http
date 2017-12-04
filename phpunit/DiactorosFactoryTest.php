<?php
namespace phpunit\Gap\Http;

use PHPUnit\Framework\TestCase;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
use Symfony\Component\HttpFoundation\Request;
use Psr\Http\Message\ServerRequestInterface;

class DiactorosFactoryTest extends TestCase
{
    public function testCreateRequest(): void
    {
        $symfonyRequest = new Request(
            array(),
            array(),
            array(),
            array(),
            array(),
            array('HTTP_HOST' => 'tecposter.cn'),
            'Content'
        );
        // The HTTP_HOST server key must be set to avoid an unexpected error

        $psr7Factory = new DiactorosFactory();
        $psrRequest = $psr7Factory->createRequest($symfonyRequest);
        $this->assertContainsOnlyInstancesOf(
            ServerRequestInterface::class,
            [$psrRequest]
        );
    }
}
