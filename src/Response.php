<?php
namespace Gap\Http;

use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class Response extends SymfonyResponse implements ResponseInterface
{
    public function send(): ResponseInterface
    {
        parent::send();
        return $this;
    }
}
