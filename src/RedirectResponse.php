<?php
namespace Gap\Http;

use Symfony\Component\HttpFoundation\RedirectResponse as SymfonyRedirectResponse;

class RedirectResponse extends SymfonyRedirectResponse implements ResponseInterface
{
    public function send(): ResponseInterface
    {
        parent::send();
        return $this;
    }
}
