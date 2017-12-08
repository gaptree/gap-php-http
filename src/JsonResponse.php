<?php
namespace Gap\Http;

use Symfony\Component\HttpFoundation\JsonResponse as SymfonyJsonResponse;

class JsonResponse extends SymfonyJsonResponse implements ResponseInterface
{
    public function send(): ResponseInterface
    {
        parent::send();
        return $this;
    }
}
